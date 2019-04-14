<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Incident;
use App\Project;
use App\Team;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teamActivity()
    {
        $teams = Team::with([
            'employees',
            'projects',
            'projects.incidents'
        ])->get();

        if($teams) {
            $data = [];
            foreach ($teams as $team) {
                $openIncidents = 0;
                $closedIncidents = 0;
                foreach ($team->projects as $project) {
                    $openIncidents += count($project->incidents->where('is_solved', false));
                    $closedIncidents += count($project->incidents->where('is_solved', true));
                }
                $computed = [
                    'code' => $team->code,
                    'name' => $team->name,
                    'employees' => count($team->employees),
                    'projects' => count($team->projects),
                    'openIncidents' => $openIncidents,
                    'closedIncidents' => $closedIncidents
                ];
                array_push($data, $computed);
            }

            if ($data) {
                return response()->json(['data' => $data, 'success' => true], 200);
            }
        }

        return response()->json(['success' => false, 'message' => 'Collection of teams, projects and incidents not found.'], 404);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function projectActivity()
    {
        $projects = Project::with([
            'incidents',
        ])->get();

        if($projects) {
            $data = [];
            foreach ($projects as $project) {
                $openIncidents = count($project->incidents->where('is_solved', false));
                $closedIncidents = count($project->incidents->where('is_solved', true));
                $totalIncidents = $openIncidents + $closedIncidents;
                if ($totalIncidents) {
                    $openPercentage = (int) round($openIncidents / $totalIncidents * 100);
                    $closedPercentage = (int) round($closedIncidents / $totalIncidents * 100);
                } else {
                    $openPercentage = 0;
                    $closedPercentage = 0;
                }
                $computed = [
                    'code' => $project->code,
                    'name' => $project->name,
                    'openIncidents' => $openIncidents,
                    'closedIncidents' => $closedIncidents,
                    'totalIncidents' => $totalIncidents,
                    'openIncidentsPercentage' => $openPercentage,
                    'closedIncidentsPercentage' => $closedPercentage
                ];
                array_push($data, $computed);
            }

            if ($data) {
                return response()->json(['data' => $data, 'success' => true], 200);
            }
        }

        return response()->json(['success' => false, 'message' => 'Collection of projects and incidents not found.'], 404);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function totalIncidents()
    {
        $totalIncidents = Incident::get()->count();
        $closedIncidents = Incident::where('is_solved', true)->get()->count();
        if ($totalIncidents) {
            $closedPercentage = (int) round($closedIncidents / $totalIncidents * 100);
        } else {
            $closedPercentage = 0;
        }

        if($totalIncidents) {
            $data = [
                'totalIncidents' => $totalIncidents,
                'closedIncidents' => $closedIncidents,
                'closedPercentage' => $closedPercentage
            ];

            if ($data) {
                return response()->json(['data' => $data, 'success' => true], 200);
            }
        }

        return response()->json(['success' => false, 'message' => 'Collection of total and closed incidents not found.'], 404);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employeesAssignedToIncidents()
    {
        $totalEmployees = Employee::get()->count();
        $employeesAssignedToOpenIncidents = Employee::whereHas('incidents', function($query) {
            $query->where('is_solved', false);
        })->get()->count();

        if ($totalEmployees) {
            $assignedPercentage = (int) round($employeesAssignedToOpenIncidents / $totalEmployees * 100);
        } else {
            $assignedPercentage = 0;
        }

        if($totalEmployees) {
            $data = [
                'totalEmployees' => $totalEmployees,
                'assignedToOpenIncidents' => $employeesAssignedToOpenIncidents,
                'assignedPercentage' => $assignedPercentage
            ];

            if ($data) {
                return response()->json(['data' => $data, 'success' => true], 200);
            }
        }

        return response()->json(['success' => false, 'message' => 'Collection of total and closed incidents not found.'], 404);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function timelineChart()
    {
        $chartLabel = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        $linesData = [];
        $incidents = [];
        $employees = [];
        $projects = [];
        for ($i = 1; $i <= 12; $i++) {
            $project = Project::whereDate('created_at', '<=', date('2018-'.$i.'-30'))->whereDate('created_at', '>=', date('2018-'.$i.'-01'))->get()->count();
            array_push($projects, $project);
            $incident = Incident::whereDate('created_at', '<=', date('2018-'.$i.'-30'))->whereDate('created_at', '>=', date('2018-'.$i.'-01'))->get()->count();
            array_push($incidents, $incident);
            $employee = Employee::whereDate('hiring_date', '<=', date('2018-'.$i.'-30'))->whereDate('hiring_date', '>=', date('2018-'.$i.'-01'))->get()->count();
            array_push($employees, $employee);
        }
        array_push($linesData, $projects);
        array_push($linesData, $incidents);
        array_push($linesData, $employees);
        $data = ['chartLabel' => $chartLabel, 'linesData' => $linesData];

        if ($data) {
            return response()->json(['data' => $data, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Collection of total and closed incidents not found.'], 404);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function compareChart()
    {
        $chartLabel = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        $linesData = [];
        $incidents = [];
        $employees = [];
        $projects = [];
        for ($i = 1; $i <= 12; $i++) {
            $project = Project::whereDate('created_at', '<=', date('2018-'.$i.'-30'))->whereDate('created_at', '>=', date('2018-'.$i.'-01'))->get()->count();
            array_push($projects, $project);
            $incident = Incident::whereDate('created_at', '<=', date('2018-'.$i.'-30'))->whereDate('created_at', '>=', date('2018-'.$i.'-01'))->get()->count();
            array_push($incidents, $incident);
            $employee = Employee::whereDate('hiring_date', '<=', date('2018-'.$i.'-30'))->whereDate('hiring_date', '>=', date('2018-'.$i.'-01'))->get()->count();
            array_push($employees, $employee);
        }
        array_push($linesData, $projects);
        array_push($linesData, $incidents);
        array_push($linesData, $employees);
        $data = ['chartLabel' => $chartLabel, 'data' => $linesData];

        if ($data) {
            return response()->json(['data' => $data, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Collection of total and closed incidents not found.'], 404);
    }

}

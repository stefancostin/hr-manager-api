<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        if ($projects) {
            return response()->json(['data' => $projects, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Collection of all projects not found.'], 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        // Validation done through ProjectRequest

        $data = [
            'code' => strtoupper($request->code),
            'name' => $request->name
        ];

        $newProject = Project::create($data);

        return response()->json(['data' => $newProject, 'success' => false], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teamproject = Project::find($id);

        if($project) {
            return response()->json(['data' => $project, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Project not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        // Validation done through ProjectRequest

        $project = Project::find($id);

        if ($project) {

            $data = [
                'code' => strtoupper($request->code),
                'name' => $request->name
            ];

            $project->update($data);

            return response()->json(['data' => $project, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Project not found.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        if ($project) {
            $project->delete();
            return response()->json(['success' => true, 'message' => 'Project deleted successfully'], 200);
        }

        return response()->json(['success' => false, 'message' => 'Project not found.'], 404);
    }
}

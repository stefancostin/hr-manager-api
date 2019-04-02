<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();

        if ($teams) {
            return response()->json(['data' => $teams, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Collection of all teams not found.'], 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        // Validation done through TeamRequest

        $data = [
            // 'competence_center_id',
            'code' => strtoupper($request->code),
            'name' => $request->name
        ];

        $newTeam = Team::create($data);

        return response()->json(['data' => $newTeam, 'success' => false], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);

        if($team) {
            return response()->json(['data' => $team, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Team not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $id)
    {
        // Validation done through TeamRequest

        $team = Team::find($id);

        if($team) {

            $data = [
                // 'competence_center_id',
                'code' => strtoupper($request->code),
                'name' => $request->name
            ];

            $team->update($data);

            return response()->json(['data' => $team, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Team not found.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);

        if ($team) {
            $team->delete();
            return response()->json(['success' => true, 'message' => 'Team deleted successfully'], 200);
        }

        return response()->json(['success' => false, 'message' => 'Team not found.'], 404);
    }
}

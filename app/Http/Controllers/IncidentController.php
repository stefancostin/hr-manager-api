<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\IncidentRequest;
use App\Incident;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidents = Incident::with(['project:id,code', 'employee:id,first_name,last_name'])->get();

        if ($incidents) {
            return response()->json(['data' => $incidents, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Collection of all incidents not found.'], 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IncidentRequest $request)
    {
        // Basic validation done through IncidentRequest

        $data = [
            'project_id' => $request->project_id,
            'employee_id' => $request->employee_id,
            'code' => $request->code,
            'subject' => $request->subject,
            'description' => $request->description
        ];

        $newIncident = Incident::create($data);

        return response()->json(['data' => $newIncident, 'success' => true], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incident = Incident::with(['project:id,code', 'employee:id,first_name,last_name'])->find($id);

        if ($incident) {
            return response()->json(['data' => $incident, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Incident not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IncidentRequest $request, $id)
    {
        // Basic validation done through IncidentRequest

        $incident = Incident::find($id);

        if($incident) {

            $data = [
                'project_id' => $request->project_id,
                'employee_id' => $request->employee_id,
                'code' => $request->code,
                'subject' => $request->subject,
                'description' => $request->description
            ];

            $incident->update($data);

            return response()->json(['data' => $incident, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Incident not found.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incident = Incident::find($id);

        if ($incident) {
            $incident->delete();
            return response()->json(['success' => true, 'message' => 'Incident deleted successfully'], 200);
        }

        return response()->json(['success' => false, 'message' => 'Incident not found.'], 404);
    }
}

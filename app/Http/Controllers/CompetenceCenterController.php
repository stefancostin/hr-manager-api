<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompetenceCenterRequest;
use App\CompetenceCenter;

class CompetenceCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competenceCenters = CompetenceCenter::all();

        if ($competenceCenters) {
            return response()->json(['data' => $competenceCenters, 'success' => true], 200);
        }

        return response()->json(['success' => true, 'message' => 'Collection of all competence centers not found.'], 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompetenceCenterRequest $request)
    {
        // Validation done through CompetenceCenterRequest
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompetenceCenterRequest $request, $id)
    {
        // Validation done through CompetenceCenterRequest
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComputerRequest;
use App\Computer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $computers = Computer::with('employee:id,first_name,last_name')->get();

        if ($computers) {
            return response()->json(['data' => $computers, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Collection of all computers not found.'], 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComputerRequest $request)
    {
        // Validation done through ComputerRequest

        $data = [
            'employee_id' => $request->employee_id,
            'code' => strtoupper($request->code),
            'operating_system' => $request->operating_system,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'hdd' => $request->hdd
        ];

        $newComputer = Computer::create($data);

        return response()->json(['data' => $newComputer, 'success' => true], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computer = Computer::with('employee:id,first_name,last_name')->find($id);

        if($computer) {
            return response()->json(['data' => $computer, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Computer not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComputerRequest $request, $id)
    {
        // Validation done through ComputerRequest

        $computer = Computer::find($id);

        if ($computer) {

            $data = [
                'employee_id' => $request->employee_id,
                'code' => strtoupper($request->code),
                'operating_system' => $request->operating_system,
                'cpu' => $request->cpu,
                'ram' => $request->ram,
                'hdd' => $request->hdd
            ];

            $computer->update($data);

            return response()->json(['data' => $computer, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Computer not found.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $computer = Computer::find($id);

        if ($computer) {
            $computer->delete();
            return response()->json(['success' => true, 'message' => 'Computer deleted successfully'], 200);
        }

        return response()->json(['success' => false, 'message' => 'Computer not found.'], 404);
    }
}

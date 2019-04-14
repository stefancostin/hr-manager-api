<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::with(['role:id,code,name', 'team:id,code'])->get();

        if ($employees) {
            return response()->json(['data' => $employees, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Collection of all employees not found.'], 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        // Basic validation done through EmployeeRequest

        $data = [
            'role_id' => $request->role_id,
            'team_id' => $request->team_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'hiring_date' => $request->hiring_date,
        ];

        $newEmployee = Employee::create($data);

        return response()->json(['data' => $newEmployee, 'success' => true], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::with(['role:id,code,name', 'team:id,code'])->find($id);

        if ($employee) {
            return response()->json(['data' => $employee, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Employee not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeUpdateRequest $request, $id)
    {
        // Validation done through EmployeeRequest

        $employee = Employee::find($id);

        if($employee) {

            $data = [
                'role_id' => $request->role_id,
                'team_id' => $request->team_id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'hiring_date' => $request->hiring_date
            ];

            $employee->update($data);

            return response()->json(['data' => $employee, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Employee not found.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);

        if ($employee) {
            $employee->delete();
            return response()->json(['success' => true, 'message' => 'Employee deleted successfully'], 200);
        }

        return response()->json(['success' => false, 'message' => 'Employee not found.'], 404);
    }

    /**
     * Display a listing of the employees that
     * don't have a computer assigned to them.
     *
     * @return \Illuminate\Http\Response
     */
    public function withoutComputer()
    {
        $employees = Employee::doesnthave('computer')->get();

        if ($employees) {
            return response()->json(['data' => $employees, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Collection of employees without computers not found.'], 404);
    }

}

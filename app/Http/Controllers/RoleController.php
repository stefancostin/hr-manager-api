<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use App\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        if ($roles) {
            return response()->json(['data' => $roles, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Collection of all roles not found.'], 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        // Validation done through RoleRequest

        $data = [
            'code' => strtoupper($request->code),
            'name' => $request->name,
            'description' => $request->description,
            'is_management' => isset($request->is_management) ? $request->is_management : false
        ];

        $newRole = Role::create($data);

        return response()->json(['data' => $newRole, 'success' => true], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);

        if($role) {
            return response()->json(['data' => $role, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Role not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        // Validation done through RoleRequest

        $role = Role::find($id);

        if($role) {

            $data = [
                'code' => strtoupper($request->code),
                'name' => $request->name,
                'description' => $request->description,
                'is_management' => isset($request->is_management) ? $request->is_management : false
            ];

            $role->update($data);

            return response()->json(['data' => $role, 'success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Role not found.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);

        if ($role) {
            $role->delete();
            return response()->json(['success' => true, 'Role deleted successfully.'], 200);
        }

        return response()->json(['success' => false, 'message' => 'Role not found.'], 404);
    }
}

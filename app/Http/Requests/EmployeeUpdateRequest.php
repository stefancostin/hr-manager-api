<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Employee;

class EmployeeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->assignToTeam();
        $employee = Employee::find($this->employee);
        return [
            'role_id' => 'integer|exists:roles,id',
            'team_id' => 'integer|exists:teams,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,'.$employee->id.'|max:255',
            'hiring_date' => 'required|date',
        ];
    }

    /**
     * Used to validate assignToTeam().
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!$this->assignToTeam()) {
                $validator->errors()->add('role_id', 'Employee with the same management role already exists on this team!');
            }
        });
    }

    /**
     * Checks if there is another management-employee
     * with the same management role, on the same team.
     *
     * @return boolean
     */
    private function assignToTeam()
    {
        /**
         * SELECT *
         * FROM employees
         * JOIN roles ON employees.role_id = roles.id
         * WHERE (roles.is_management = true
         * AND employees.role_id = $role_id
         * AND employees.team_id = $team_id);
         */

        if ((Employee::find($this->employee)->role_id == $this->role_id) && (Employee::find($this->employee)->team_id == $this->team_id)){
            return true;
        } else {
            $duplicateMgmtEmployee = Employee::whereHas('role', function($query) {
                $query->where('is_management', true);
            })
                ->where('role_id', $this->role_id)
                ->where('team_id', $this->team_id)
                ->get();
                return empty($duplicateMgmtEmployee->toArray());
        }
        return false;
    }
}

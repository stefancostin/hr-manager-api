<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Employee;
use App\Team;

class RoleRequest extends FormRequest
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
        return [
            'code' => 'required|string|unique:roles,code,'.$this->id.'|max:255',
            'name' => 'required|string|max:255',
            'description' => 'string|max:255',
        ];
    }

    /**
     * Used to validate convertToManagement().
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!$this->convertToManagement()) {
                $validator->errors()->add('is_management', 'Two or more employees with the same role already exists on this team! They can\'t be all made Management.');
            }
        });
    }

    /**
     * Checks if there are more than one employee
     * this have this same exact role within a team.
     *
     * If two employees with the same role are found
     * within a team, the validation fails and the role
     * can not be converted to a management role.
     *
     * @return boolean
     */
    public function convertToManagement()
    {
        // SELECT *, COUNT(*)
        // FROM `employees`
        // WHERE role_id = 2
        // GROUP BY team_id;

        $teams = Team::with('employees')->get();
        foreach($teams as $team) {
            if($team->employees->where('role_id', $this->id)->count() > 1) {
                return false;
            }
        }
        return true;
    }

}

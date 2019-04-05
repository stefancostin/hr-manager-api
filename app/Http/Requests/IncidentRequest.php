<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Employee;

class IncidentRequest extends FormRequest
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
            'project_id' => 'integer|exists:projects,id',
            'employee_id' => 'integer|exists:employees,id',
            'code' => 'required|string|unique:incidents,code,'.$this->id.'|max:255',
            'subject' => 'required|string|max:255',
            'description' => 'required|string|max:255'
        ];
    }

    /**
     * Used to validate isEmployeeAssignedToProject().
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!$this->isEmployeeAssignedToProject()) {
                $validator->errors()->add('employee_id', 'Employee is not assigned to the requested project!');
            }
        });
    }

    /**
     * Checks if employee is assigned to the requested project.
     *
     * @return boolean
     */
    private function isEmployeeAssignedToProject()
    {
        $activeProjects = Employee::with('team.projects')
            ->find($this->employee_id)
            ->team->projects;

        foreach ($activeProjects as $project) {
            if ($project->id === $this->project_id) {
                return true;
            }
        }

        return false;
    }
}

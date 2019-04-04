<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncidentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
}

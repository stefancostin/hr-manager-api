<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputerRequest extends FormRequest
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
            'employee_id' => 'nullable|sometimes|integer|exists:employees,id|unique:computers,employee_id,'.$this->id,
            'code' => 'required|string|unique:computers,code,'.$this->id.'|max:255',
            'operating_system' => 'required|string|max:255',
            'cpu' => 'required|string|max:255',
            'ram' => 'required|string|max:255',
            'hdd' => 'required|string|max:255'
        ];
    }
}

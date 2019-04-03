<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'competence_center_id' => 'required|integer|exists:competence_centers,id',
            'code' => 'required|string|unique:teams,code,'.$this->id.'|max:255',
            'name' => 'required|string|max:255'
        ];
    }
}

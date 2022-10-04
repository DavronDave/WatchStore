<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectEventRequest extends FormRequest
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
            "title" => 'required|array',
            "title.*" => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required|boolean',
            'address' => 'required',
            'contact' => 'required',
            'manufacturer' => 'required',
            'document' => 'nullable',
        ];
    }
}

<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            "name" => 'required|array',
            "name.*" => 'required',
            "short_description" => 'required|array',
            "short_description.*" => 'required',
            "region" => 'required|array',
            "region.*" => 'required',
            "status" => 'required|boolean',
            "image" => 'required',
            "cover_image" => 'required',
            "images" => 'nullable',
            "point_x" => 'required',
            "point_y" => 'required',
        ];
    }
}

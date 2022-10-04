<?php

namespace App\Http\Requests\Langs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLangRequest extends FormRequest
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
            "name" => 'required',
//            "url" => 'required',
//            "status" => 'required|boolean',
//            "default" => 'required|boolean',
            "image" => 'image',
            "labels" => 'required|array',
            "labels.*" => 'required',
            "menus" => 'required|array',
            "menus.*" => 'required',
        ];
    }
}

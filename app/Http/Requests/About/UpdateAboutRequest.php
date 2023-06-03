<?php

namespace App\Http\Requests\About;

use App\Models\Basic\Lang;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
        /*$default = Lang::where('default',1)->first();*/
        return [
            "logo" => 'image',
            "image" => 'image',
            "description" => 'required|array',
            "description.*" => 'required',
            "name" => 'required|array',
            "name.*" => 'required',
            "point_x" => 'required',
            "point_y" => 'required',
        ];
    }
}

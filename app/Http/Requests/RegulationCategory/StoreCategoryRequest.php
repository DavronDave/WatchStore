<?php

namespace App\Http\Requests\RegulationCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
//            "name.ru" => 'unique:article_categories,name',
            "status" => 'required|boolean',
        ];
    }
}

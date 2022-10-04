<?php

namespace App\Http\Requests\RegulationCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
        $data = $this->request->all();
        return [
            "name" => 'required|array',
            "name.*" => 'required',
//            "name.ru" => 'unique:article_categories,name,'.$data['category_id'],
            "status" => 'required|boolean',
            "category_id" => "required"
        ];
    }
}

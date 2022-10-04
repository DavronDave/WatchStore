<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            "description" => 'required|array',
            "description.*" => 'required',
            "status" => 'required|boolean',
            "image" => 'nullable',
            "cover_image" => 'nullable',
            "published_date" => 'date',
            "article_category_id" => 'required',
            "images" => 'nullable',
            'remove_images' => 'nullable',
        ];
    }
}

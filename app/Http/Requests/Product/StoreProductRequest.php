<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            "image"=>'required',
            "images" => 'required|array',
            "title"=>'required',
            "description"=>'required',
            "old_price"=>'required',
            "discount"=>'required',
            "function"=>'required',
            "status"=>'required|boolean',
            "characteristics" => 'nullable'
        ];
    }
}

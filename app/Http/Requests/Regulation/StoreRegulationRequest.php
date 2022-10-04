<?php

namespace App\Http\Requests\Regulation;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegulationRequest extends FormRequest
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
            "status" => 'required|boolean',
            "document" => 'required',
            "published_date" => 'date',
            "regulation_category_id" => 'required'
        ];
    }
}

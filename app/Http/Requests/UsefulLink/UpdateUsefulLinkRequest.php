<?php

namespace App\Http\Requests\UsefulLink;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsefulLinkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>'required',
            "link"=>'required',
            "status"=>'required|boolean',
        ];
    }
}

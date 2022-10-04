<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $user = auth()->user();
        return [
            'avatar' => 'nullable|mimes:jpeg,jpg,png,gif,svg|max:10000',
            'name' => 'required',
            'username' => 'required|max:255|unique:users,username,' . $user['id'],
            'old_password' => "nullable",
            'password' => "nullable|different:old_password|required_with:old_password",
        ];
    }
}

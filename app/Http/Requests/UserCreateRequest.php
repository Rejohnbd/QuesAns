<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'role_id'   => 'required|exists:roles,id',
            'name'      => 'required',
            'email'     => 'required|email|max:255|unique:users,email',
            'password'  => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'role_id.required'  => "User Role Required",
            'role_id.exists'    => "Provide Valid User Role",
            'name.required'     => "User Name is Required",
            'email.required'    => "User Email is Requred",
            'email.email'       => "Provide Valid User Email",
            'email.max'         => "Provide Valid User Email",
            'email.unique'      => "User Email Already Exist",
            'password.required' => "User Password Required",
            'password.min'      => "Password Not less than 8 Charecter",
        ];
    }
}

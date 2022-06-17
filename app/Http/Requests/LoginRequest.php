<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'  => 'required|string',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'É necessário informar o email',
            'password.required' => 'É necessário informar a senha',
        ];
    }
}

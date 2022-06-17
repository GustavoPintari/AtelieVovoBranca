<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Rules\Cpf;

class CadastroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'string', 'min:3', 'max:60'],
            'sobrenome' => ['required', 'string', 'min:3', 'max:60'],

            'cpf' => [
                'required', new Cpf,
                'unique:cliente',
            ],

            'email' => [
                'required', 'min:6', 'max:60', 'email', 
                'unique:cliente',
            ], 

            'nascimento' => ['required', 'date'],
            'celular' => ['required', 'string', 'size:10'],
            'telefone' => ['nullable', 'string', 'size:10'],

            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'password_confirmation' => ['required'], 
        ];
    }

    public function messages()
    {
        return [
            'nome.min' => 'Campo deve conter pelo menos 3 caracteres',
            'nome.max' => 'Campo deve conter no máximo até 60 caracteres',
            'nome.required' => 'Campo nome é obrigatório',

            'sobrenome.min' => 'Campo deve conter pelo menos 3 caracteres',
            'sobrenome.max' => 'Campo deve conter no máximo até 60 caracteres',
            'sobrenome.required' => 'Campo sobrenome é obrigatório',

            'cpf.unique' => 'Este cpf já está em uso',
            'cpf.required' => 'Campo cpf é obrigatório',

            'email.min' => 'Campo deve conter pelo menos 6 caracteres',
            'email.max' => 'Campo deve conter no máximo até 60 caracteres',
            'email.unique' => 'Este email já está em uso',
            'email.required' => 'Campo email é obrigatório',

            'nascimento.required' => 'Campo data de nascimento é obrigatório',

            'password.min' => 'A senha deve conter pelo menos 5 caracteres',
            'password.confirmed' => 'As senhas digitadas não são iguais',
            'password.required' => 'Campo senha é obrigatório',

            'password_confirmation.required' => 'Confirme sua senha'
        ];
    }
}

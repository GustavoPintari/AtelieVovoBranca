<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DadosRequest extends FormRequest
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
                'required', 'string', 'size:13',
                'unique:cliente'
            ],

            'email' => [
                'required', 'string', 'email',
                'max:60','unique:cliente'
            ],
            'nascimento' => ['required', 'date'],
            'celular' => ['required', 'string', 'min:14', 'max:14'],
            'telefone' => ['nullable', 'string', 'min:14', 'max:14'],
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

            'email.unique' => 'Este email já está em uso'
    


        ];
    }
    
}

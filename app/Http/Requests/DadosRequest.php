<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\Cpf;


class DadosRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        return [
            'nome' => ['required', 'string', 'min:3', 'max:60'],
            'sobrenome' => ['required', 'string', 'min:3', 'max:60'],

            'cpf' => [
                'required', new Cpf,
                'unique:cliente,cpf,' . $request->user()->id,
            ],

            'email' => [
                'required', 'min:6', 'max:60', 'email', 
                'unique:cliente,email,' . $request->user()->id,
            ], 

            'nascimento' => ['required', 'date'],
            'celular' => ['required', 'string', 'size:10'],
            'telefone' => ['nullable', 'string', 'size:10'],
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
            
        ];
    }
    
}

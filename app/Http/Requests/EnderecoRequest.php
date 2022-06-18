<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnderecoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cep' => ['required', 'string', 'size:9'],
            'uf' => ['required', 'string', 'size:2'],
            'cidade' => ['required', 'string', 'max:60'],
            'rua' => ['required', 'string', 'max:60'],
            'bairro' => ['required', 'string', 'max:60'],
            'numero' => ['required', 'integer'],
            'complemento' => ['nullable', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'cep.size' => 'O cep informado é inválido',
            'cep.required' => 'Campo cep é obrigatório',

            'uf.size' => 'Sigla Inválida',
            'uf.required' => 'É necessário informar a sigla do seu Estado',

            'cidade.max' => 'Campo inválido',
            'cidade.required' => 'Campo cidade é obrigatório',

            'rua.max' => 'Campo inválido',
            'rua.required' => 'Campo rua é obrigatório',
            
            'bairro.max' => 'Campo inválido',
            'bairro.required' => 'Campo bairro é obrigatório',

            'numero.required' => 'Campo número é obrigatório',   
        ];
    }
}

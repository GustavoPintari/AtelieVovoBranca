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
            'cep' => ['required', 'string', 'size:14'],
            'rua' => ['required', 'string', 'min:3', 'max:60'],
            'bairro' => ['required', 'string', 'min:3', 'max:60'],
            'numero' => ['required', 'number', 'min:1', 'max:6'],
            'complemento' => ['nullable', 'string', 'max:6'],
        ];
    }

    public function messages()
    {
        
    }
}

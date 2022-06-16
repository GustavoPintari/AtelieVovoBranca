@extends('layouts.cliente')

@section('title', 'Ateliê Vovó Branca - Dados Pessoais')
@section('set', 'Dados Pessoais')

@section('form')
    <form action="">
        <div class="row gx-1">
            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="nome" value="{{ $cliente->nome }}"
                    type="text" id="nome" disabled>
                <label for="nome"> Nome </label>
            </div>

            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="sobrenome" value="{{ $cliente->sobrenome }}"
                    type="text" id="sobrenome" disabled>
                <label for="sobrenome"> Sobrenome </label>          
            </div> 
        </div>

        <div class="row gx-1">
            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="cpf" value="{{ $cliente->cpf }}"
                    type="text" id="cpf" disabled>
                <label for="cpf"> CPF </label>
            </div>

            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="nascimento" value="{{ $cliente->nascimento }}"
                    type="date" id="nascimento" disabled>
                <label for="nascimento"> Data de Nascimento </label>
            </div>   
        </div>

        <div class="form-floating mb-3 col-12">
            <input class="form-control"
                name="email" value="{{ $cliente->email }}"
                type="email" id="email" disabled>
            <label for="email"> E-mail </label>  
        </div>

        <div class="row gx-1">
            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="celular" value="{{ $cliente->celular }}"
                    type="celular" id="celular" disabled>
                <label for="celular"> Celular </label>
            </div>

            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="telefone" value="{{ $cliente->telefone }}"
                    type="telefone" id="telefone" disabled>
                <label for="telefone"> Telefone </label>
            </div>        
        </div>
    </form>
    <div class="d-flex flex-row-reverse">
        <div class="mb-3">
            <button class="btn btn-lg btn-danger"
                onclick="window.location.href= 
                '{{ route('dados.update') }}'"> Alterar Informações
            </button>
        </div>
    </div>
@endsection





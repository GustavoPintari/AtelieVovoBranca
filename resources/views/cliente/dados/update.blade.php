@extends('layouts.cliente')

@section('title', 'Ateliê Vovó Branca - Alterar Dados Pessoais')
@section('set', 'Alterar Informações')

@section('form')
    <form action="{{ route('dados.update') }}" method="post">
        @csrf @method('put')

        <div class="row gx-1">
            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control 
                    @error('nome') is-invalid @enderror"
                    name="nome" value="{{ $cliente->nome }}"
                    type="text" id="nome">
                <label for="nome"> Nome </label>

                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control
                    @error('sobrenome') is-invalid @enderror"
                    name="sobrenome" value="{{ $cliente->sobrenome }}"
                    type="text" id="sobrenome">
                <label for="sobrenome"> Sobrenome </label>     

                @error('sobrenome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror     
            </div> 
        </div>

        <div class="row gx-1">
            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control
                    @error('cpf') is-invalid @enderror"
                    name="cpf" value="{{ $cliente->cpf }}"
                    type="text" id="cpf">
                <label for="cpf"> CPF </label>

                @error('cpf')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }} </strong>
                    </span>
                @enderror     
            </div>

            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control
                    @error('nascimento') is-invalid @enderror"
                    name="nascimento" value="{{ $cliente->nascimento }}"
                    type="date" id="nascimento">
                <label for="nascimento"> Data de Nascimento </label>

                @error('nascimento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror     
            </div>   
        </div>

        <div class="form-floating mb-3 col-12">
            <input class="form-control
                @error('email') is-invalid @enderror"
                name="email" value="{{ $cliente->email }}"
                type="email" id="email">
            <label for="email"> E-mail </label>  

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror  
        </div>

        <div class="row gx-1">
            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control
                    @error('celular') is-invalid @enderror"
                    name="celular" value="{{ $cliente->celular }}"
                    type="celular" id="celular">
                <label for="celular"> Celular </label>

                @error('celular')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
            </div>

            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control
                    @error('telefone') is-invalid @enderror"
                    name="telefone" value="{{ $cliente->telefone }}"
                    type="telefone" id="telefone">
                <label for="telefone"> Telefone </label>

                @error('telefone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
            </div>        
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="mb-3">
                <input type="submit" value="Alterar Informações"
                    class="btn btn-lg btn-danger">
            </div>
        </div>
    </form>
@endsection




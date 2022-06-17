@extends('layouts.app')

@section('title', 'Ateliê Vovó Branca - Cadastro')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('cadastro.create') }}"> 
            @csrf
            
            <h1 class="text-center"> 
                Informe seus dados 
            </h1>

            <hr> 
            <div class="col-lg-12">

                <legend class="mt-3">Dados Pessoais</legend>

                <div class="row gx-1">
                    <div class="form-floating mb-3 col-12 col-lg-6">
                        <input class="form-control
                            @error('nome') is-invalid @enderror"
                            name="nome" value="{{ old('nome') }}"
                            type="text" id="nome"
                            placeholder="">
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
                            name="sobrenome" value="{{ old('sobrenome') }}"
                            type="text" id="sobrenome" 
                            placeholder="">
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
                            name="cpf" type="text" id="cpf" placeholder=""
                            @if($errors->has('cpf'))
                                value=""
                            @else
                                value="{{ old('cpf') }}"
                            @endif>
                        <label for="cpf"> CPF </label>
                        @error('cpf')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3 col-12 col-lg-6">
                        <input class="form-control
                            @error('nascimento') is-invalid @enderror"
                            name="nascimento" value="{{ old('nascimento') }}"
                            type="date" id="nascimento"
                            placeholder="">
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
                        name="email" type="email"
                        id="email" placeholder=""
                        @if($errors->has('email'))
                            value=""
                        @else
                            value="{{ old('email') }}"
                        @endif>
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
                            name="celular" value="{{ old('celular') }}"
                            type="celular" id="celular" placeholder="">
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
                            name="telefone" value="{{ old('telefone') }}"
                            type="telefone" id="telefone" placeholder="">
                        <label for="telefone"> Telefone </label>
                        @error('telefone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>        
                </div>

                <legend class="mt-3">Endereço</legend>
                
                <div class="row gx-1">
                    <div class="form-floating mb-3 col-12 col-lg-6">
                        <input class="form-control
                            @error('cep') is-invalid @enderror"
                            name="cep" value="{{ old('cep') }}"
                            type="text" id="cep" placeholder="">
                        <label for="cep"> CEP </label>
                        @error('cep')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3 col-12 col-lg-6">
                        <input class="form-control
                            @error('rua') is-invalid @enderror"
                            name="rua" value="{{ old('rua') }}"
                            type="text" id="rua" placeholder="">
                        <label for="rua"> Rua </label>
                        @error('rua')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                </div>

                <div class="row gx-1">
                    <div class="form-floating mb-3 col-12 col-lg-6">
                        <input class="form-control
                            @error('bairro') is-invalid @enderror"
                            name="bairro" value="{{ old('bairro') }}"
                            type="text" id="bairro" placeholder="">
                        <label for="bairro"> Bairro </label>
                        @error('bairro')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3 col-12 col-lg-6">
                        <input class="form-control
                            @error('numero') is-invalid @enderror"
                            name="numero" value="{{ old('numero') }}"
                            type="text" id="numero" placeholder="">
                        <label for="numero"> Numero </label>
                        @error('numero')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                </div>

                <div class="form-floating mb-3 col-12">
                    <input class="form-control
                        @error('complemento') is-invalid @enderror"
                        name="complemento" value="{{ old('complemento') }}"
                        type="text" id="complemento" placeholder="">
                    <label for="complemento"> Complemento </label>
                    @error('complemento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror      
                </div>

                <legend class="mt-3">Senha de Acesso</legend>
                            
                <div class="row gx-1">        
                    <div class="form-floating mb-3 col-lg-6">
                        <input class="form-control
                            @error('password') is-invalid @enderror"
                            name="password" type="password"
                            id="password" placeholder="">           
                        <label for="password">
                            Senha
                        </label>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 col-lg-6">
                        <input class="form-control
                            @error('password_confirmation') 
                                is-invalid 
                            @enderror" name="password_confirmation" 
                            type="password" id="password_confirmation" placeholder="">           
                        <label for="password_confirmation">
                            Confirmação da Senha
                        </label>

                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>           
            </div>
            
            <hr>
            <div class="d-flex flex-row-reverse">
                <div class="mb-3">
                    <a class="btn btn-lg btn-light btn-outline-danger" 
                        href="{{ route('home') }}"> Cancelar
                    </a>
                    <input type="submit" value="Criar meu cadastro"
                        class="btn btn-lg btn-danger">
                </div>
            </div>
        </form>
    </div>
@endsection



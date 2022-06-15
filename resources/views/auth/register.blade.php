@extends('layouts.app')

@section('title', 'Ateliê Vovó Branca - Cadastro')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('register') }}"> @csrf
            
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
                            type="text" id="nome" required autofocus
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
                            type="text" id="sobrenome" required autofocus
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
                            name="cpf" value="{{ old('cpf') }}"
                            type="text" id="cpf" required autofocus
                            placeholder="">
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
                            type="date" id="nascimento" required autofocus
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
                        name="email" value="{{ old('email') }}"
                        type="email" id="email" required autocomplete="email" placeholder="">
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
                            type="celular" id="celular" required autocomplete="celular" placeholder="">
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
                            type="telefone" id="telefone" autocomplete="telefone" placeholder="LALALALLA">
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
                            type="text" id="cep" required autofocus
                            placeholder="">
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
                            type="text" id="rua" required autofocus
                            placeholder="">
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
                            type="text" id="bairro" required autofocus
                            placeholder="">
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
                            type="text" id="numero" required autofocus
                            placeholder="">
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
                        type="text" id="complemento" autocomplete="complemento" placeholder="">
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
                            name="password" required autocomplete="nova-senha"
                            type="password" id="password" placeholder="">           
                        <label for="password">
                            Senha
                        </label>

                        @error('senha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 col-lg-6">
                        <input class="form-control"
                            name="password_confirmation" required autocomplete="nova-senha"
                            type="password" id="password_confirmation" placeholder="">           
                        <label for="password_confirmation">
                            Confirmação da Senha
                        </label>
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



@extends('layouts.public')

@section('title', 'Ateliê Vovó Branca - Cadastro')

@section('content')
    <div class="container">
        <h1>Por favor, informe seus dados :)</h1>
        <hr>
        <form action="{{ route('register')}}"
            method="post" class="mt-3"> @csrf
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <legend>Dados Pessoais</legend>
                    <div class="form-floating mb-3">
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
                    <div class="row gx-1 mb-3">
                        <div class="form-floating col-md-6 col-xl-6">
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

                        <div class="form-floating col-md-6 col-xl-6">
                            <input class="form-control
                                @error('nascimento') is-invalid @enderror"
                                name="nascimento" 
                                value="{{ old('nascimento') }}"
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
                    <div class="row gx-1 mb-3">
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control
                                @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}"
                                type="email" id="email" required autocomplete="email" placeholder="">
                            <label for="email">
                                E-mail
                            </label>

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control
                                @error('telefone') is-invalid @enderror"
                                name="telefone" value="{{ old('telefone') }}"
                                type="telefone" id="telefone" required autocomplete="telefone" placeholder="">
                            <label for="telefone">
                                Telefone
                            </label>

                            @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row gx-1">
                        <legend>Senha de Acesso</legend>
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
            
                {{-- <div class="col-sm-12 col-md-6">
                    <div class="row gx-1 mb-3">
                        <legend>Endereço</legend>
                        <div class="form-floating mb-3 col-md-6 col-lg-4">
                            <input class="form-control"
                                type="text" id="txtCEP" placeholder=" " />
                            <label for="txtCEP">
                                CEP
                            </label>
                        </div>
                        <div class="mb-3 col-md-6 col-lg-8 align-self-end">
                            <textarea class="form-control text-muted bg-light"
                                style="height: 58px; font-size: 14px;"
                                disabled>Digite o CEP para buscarmos o endereço.
                            </textarea>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-floating mb-3 col-md-4">
                            <input class="form-control" type="text"
                                id="txtNumero" placeholder=" " />
                            <label for="txtNumero">
                                Número
                            </label>
                        </div>
                        <div class="form-floating mb-3 col-md-8">
                            <input class="form-control" type="text"
                                id="txtComplemento" placeholder=" " />
                            <label for="txtComplemento">
                                Complemento
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text"
                                id="txtReferencia" placeholder=" " />
                            <label for="txtReferencia">
                                Referência
                            </label>
                        </div>
                    </div>       
                </div> --}}
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



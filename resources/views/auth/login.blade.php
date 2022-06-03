@extends('layouts.public')

@section('title', 'Ateliê Vovó Branca - Login')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form method="POST" action="{{ route('login') }}"> @csrf
                <div class="d-flex justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-6">
                        <h1>Por favor, identifique-se :)</h1>
                        <hr> 
                        <div class="form-floating mb-3">
                            <input class="form-control
                                @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required 
                                id="email" type="email" autocomplete="email" autofocus placeholder="">                     
                            <label> E-mail </label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control
                                @error('password') is-invalid @enderror"
                                name="password" required id="password" type="password" autofocus placeholder="">                     
                            <label> Senha </label>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Lembrar de mim
                                </label>
                            </div>
                        </div>

                        <hr>

                        <button type="submit" class="btn btn-lg btn-danger"> 
                            Entrar
                        </button>
                        <p class="mt-3">
                        Ainda não é cadastrado ? 
                        <a href="{{ route('register') }}">Clique aqui</a>
                        para se cadastrar.
                        </p>

                        <p class="mt-3">
                        Esqueceu sua senha ? 
                        <a href="{{ route('recupera_senha') }}">Clique aqui</a> 
                        para recuperá-la.
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection































{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

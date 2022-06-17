@extends('layouts.app')

@section('title', 'Ateliê Vovó Branca - Recuperar Senha')

@section('content')
  <form class="col-sm-10 col-md-8 col-lg-4">
    <h2>Esqueceu sua Senha ?</h2>

    <div class="form-floating mb-3">
      <input type="email" id="txtEmail" 
        class="form-control" placeholder="" autofocus>
      <label for="txtEmail">
        E-mail
      </label>
    </div>

    <button type="button" 
      onclick=window.location.href="{{'confirma_senha'}}" 
      class="btn btn-lg btn-danger"> Recuperar Senha
    </button>
    <p class="mt-3">
      Ainda não é cadastrado ? 
      <a href="{{ route('cadastro.create') }}">
        Clique aqui</a> para se cadastrar.
    </p>

  </form>

@endsection
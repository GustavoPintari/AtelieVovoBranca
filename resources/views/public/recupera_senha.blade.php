@extends('layouts.app')

@section('title', 'Ateliê Vovó Branca - Recuperar Senha')

@section('content')
  <div class="container">
    <form action="">
      <div class="d-flex justify-content-center">
        <div class="col-sm-10 col-md-8 col-lg-6">
          <h1 class="text-center">
            Esqueceu sua Senha ?
          </h1>
          <hr> 

          <div class="form-floating mb-3">
            <input type="email" id="email" 
              class="form-control" placeholder="">
            <label for="email"> E-mail </label>
          </div>

          <div class="mt-4"> 
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-lg btn-danger"> 
                Recuperar Senha
              </button>
            </div>

            <div class="d-flex justify-content-end">
              <p class="mt-3">
                Ainda não é cadastrado ? Clique
                <a href="{{ route('cadastro.create') }}">
                  aqui</a> para se cadastrar.
              </p>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
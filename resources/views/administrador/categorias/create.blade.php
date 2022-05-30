@extends('layouts.form')

@section('title', 'Ateliê Vovó Branca - Cadastrar nova Categoria')
@section('set', 'Categoria')

@section('form')
    <form action={{ route('categoria.create') }} method="post">
        @csrf
        <div class="mb-3">
            <label for="descricao" class="form-label">
                Digite o nome da nova Categoria:
            </label>
            <input name="descricao" type="text"
            placeholder="Nome" class="form-control" id="descricao">
        </div>
        <div class="d-flex flex-row-reverse">
            <button type="button" 
                onclick="window.location.href='{{ route('categoria.list') }}'"
                class="btn btn-lg btn-danger">
                Cancelar
            </button>
            <button type="submit" class="mx-3 btn btn-lg btn-danger">
                Enviar
            </button>
        </div>
    </form>
@endsection

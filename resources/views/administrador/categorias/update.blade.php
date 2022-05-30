@extends('layouts.form')

@section('title', 'Ateliê Vovó Branca - Atualizar uma Categoria')
@section('set', 'Categoria')

@section('form')
    <form action={{ route('categoria.update',$categoria->id) }} 
        method="post"> @csrf @method('put')
        <div class="mb-3">
            <label for="descricao" class="form-label">
                Digite o novo nome da Categoria:
            </label>
            <input name="descricao" type="text" 
            value="{{ $categoria->descricao }}"
            class="form-control" id="descricao">
        </div>
        <div class="d-flex flex-row-reverse">
            <button type="button" 
                onclick="window.location.href='{{ route('categoria.list') }}'"
                class="btn btn-lg btn-danger">
                Cancelar
            </button>
            <button type="submit" class="mx-3 btn btn-lg btn-danger">
                Alterar
            </button>
        </div>
    </form>
@endsection

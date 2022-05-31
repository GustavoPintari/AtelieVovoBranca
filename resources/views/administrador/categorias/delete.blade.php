@extends('layouts.form')

@section('title', 'Ateliê Vovó Branca - Deletar uma Categoria')
@section('set', 'Categoria')

@section('form')
    <form action={{ route('categoria.delete',
        $categoria->id) }} method="post"> @csrf @method('delete')
        <div class="mb-3">
            <label for="descricao" class="form-label">
                A seguinte Categoria será removida:
            </label>
            <input name="descricao" type="text" disabled value="{{ $categoria->descricao }}" class="form-control"
                id="descricao">
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="mb-5">
                <button type="button" onclick="window.location.href=
                    '{{ route('categoria.list') }}'"
                    class="btn btn-lg btn-danger"> Cancelar
                </button>
                <button type="submit" 
                    class="btn btn-lg btn-danger"> Remover
                </button>
            </div>
        </div>
    </form>
@endsection

@extends('layouts.form')

@section('title', 'Ateliê Vovó Branca - Deletar um Produto')
@section('set', 'Produto')

@section('form')
    <form action={{ route('produto.delete', $produto->id) }} 
        method="post"> @csrf @method('delete')
        <div class="mb-3">
            <label for="nome" class="form-label">
                O seguinte Produto será removido:
            </label>
            <input name="nome" type="text" disabled 
            value="{{ $produto->nome }}" class="form-control" id="nome">
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">
                Descrição:
            </label>
            <textarea id="descricao" disabled
                name="descricao" class="form-control"
                style="height: 100px;">{{ $produto->descricao }}
            </textarea>
        </div>

        <div class="mb-3">
            <label for="id_categoria" class="form-label">
                Categoria:
            </label>
            <input name="id_categoria" id="id_categoria" disabled 
                value="{{ $atual->descricao }}" class="form-control" type="text">
        </div>

        <div class="mb-3">
            <label for="visivel" class="form-label">
                Visibilidade:
            </label>        
            <input name="visivel" id="visivel" disabled 
                value="@if($produto->visivel==0)Visível @else Invisível @endif" 
                class="form-control" type="text">
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">
                Valor:
            </label>
            <input name="valor" id="valor" disabled 
                value="{{ $produto->valor }}" class="form-control"
                type="text">
        </div>

        <div class="mb-3">
            <label for="qtd_estoque" class="form-label">
                Quantidade em Estoque:
            </label>
            <input name="qtd_estoque" id="qtd_estoque" disabled
                value="{{$produto->qtd_estoque}}" class="form-control"
                type="text">
        </div>

        <div class="d-flex flex-row-reverse">
            <button type="button" onclick="window.location.href=
                '{{ route('produto.list') }}'" class="btn btn-lg btn-danger">
                Cancelar
            </button>
            <button type="submit" class="mx-3 btn btn-lg btn-danger">
                Remover
            </button>
        </div>
    </form>
@endsection
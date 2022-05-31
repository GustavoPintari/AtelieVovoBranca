@extends('layouts.form')

@section('title', 'Ateliê Vovó Branca - Cadastrar novo Produto')
@section('set', 'Produto')

@section('form')
    @if($categorias->first())
    <form action={{ route('produto.create') }} 
        method="post" enctype="multipart/form-data"> @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">
                Digite o nome do novo Produto:
            </label>
            <input name="nome" type="text" placeholder="Nome"
            class="form-control" id="nome">
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">
                Descrição:
            </label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="" style="height: 100px;"></textarea>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">
                Selecione uma Categoria:
            </label>
            <select class="form-select" id="categoria_id"
                name="categoria_id">
                @foreach ($categorias as $c)
                    <option value="{{ $c->id }}">{{ $c->descricao }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="imagem" class="form-label">
                Adicione a Imagem do Produto:
            </label>
            <input type="file" class="form-control" name="imagem" id="imagem" accept="image/*">
        </div>

        <div class="mb-3" class="form-label">
            <label for="visivel" class="form-label">
                Visibilidade:
            </label>
            <select class="form-select" name="visivel">
                <option value="0">Visível</option>
                <option value="1">Invisível</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">
                Valor:
            </label>
            <input name="valor" type="text" placeholder="Valor" class="form-control" id="valor">
        </div>

        <div class="mb-3">
            <label for="qtd_estoque" class="form-label">
                Quantidade em Estoque:
            </label>
            <input name="qtd_estoque" type="text" placeholder="Quantidade" class="form-control" id="qtd_estoque">
        </div>

        <div class="d-flex flex-row-reverse">
            <div class="mb-5">
                <button type="button" onclick="window.location.href=
                    '{{ route('produto.list') }}'" 
                    class="btn btn-lg btn-danger"> Cancelar
                </button>
                <button type="submit" class="btn btn-lg btn-danger">
                    Enviar
                </button>
            </div>
        </div>
    </form>
    @else
        <div class="card card-body text-center">
            <h5> É preciso ter pelo menos uma Categoria cadastrada </h5>
        </div>
        <div class="d-flex flex-row-reverse">
            <button type="button" 
                onclick="window.location.href='{{ route('produto.list') }}'"
                class="btn btn-lg btn-danger p-2 my-3"> Voltar
            </button>
        </div>
    @endif
@endsection

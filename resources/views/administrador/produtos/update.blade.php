@extends('layouts.form')

@section('title', 'Ateliê Vovó Branca - Atualizar um Produto')
@section('set', 'Produto')

@section('form')
    <form action={{ route('produto.update', $produto->id) }}
        method="post" enctype="multipart/form-data"> 
        @csrf @method('put')
        <div class="mb-3">
            <label for="nome" class="form-label">
                Digite o novo nome do Produto:
            </label>
            <input name="nome" type="text" value="{{ $produto->nome }}"
                class="form-control" id="nome">
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">
                Descrição:
            </label>
            <textarea id="descricao" name="descricao" class="form-control"
            style="height: 100px;">{{ $produto->descricao }}
            </textarea>
        </div>

        <div class="mb-3">
            <label for="id_categoria" class="form-label">
                Selecione uma nova Categoria:
            </label>
            <select class="form-select" id="id_categoria"
                name="id_categoria">
                <option disabled selected>
                    {{ $atual->descricao }}
                </option>
                @foreach ($categoria as $c)
                    @if($c->id != $atual->id)
                        <option value="{{ $c->id }}">
                            {{ $c->descricao }}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            {{-- <img src="{{ asset("img/produtos/".$produto->imagem)}}"> --}}
            <label for="imagem" class="form-label">
                Adicione a nova Imagem do Produto:
            </label>     
            <input name="imagem" id="imagem"
            type="file" class="form-control" accept="image/*">
        </div>

        <div class="mb-3" class="form-label">
            <label for="visivel" class="form-label">
                Visibilidade:
            </label>
            <select class="form-select" name="visivel">              
                @if($produto->visivel==0)             
                    <option disabled selected> Visível </option>
                    <option value="1">Invisível</option>            
                @else 
                    <option disabled selected> Invisível </option>
                    <option value="0">Visível</option>
                @endif
            </select>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">
                Valor:
            </label>
            <input name="valor" type="text" 
                value="{{$produto->valor}}"
                class="form-control" id="valor">
        </div>

        <div class="mb-3">
            <label for="qtd_estoque" class="form-label">
                Quantidade em Estoque:
            </label>
            <input name="qtd_estoque" type="text"
                value="{{$produto->qtd_estoque}}"
                class="form-control" id="qtd_estoque">
        </div>

        
        <div class="d-flex flex-row-reverse">
            <div class="mb-5">
                <button type="button"
                    onclick="window.location.href=
                    '{{ route('produto.list') }}'" 
                    class="btn btn-lg btn-danger"> Cancelar
                </button>
                <button type="submit" class="btn btn-lg btn-danger">
                    Alterar
                </button>
            </div>
        </div>
@endsection
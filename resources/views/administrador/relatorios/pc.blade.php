@extends('layouts.relatorios')

@section('title', 'Ateliê Vovó Branca - Produtos por Categoria')

@section('form')
	<h5> Selecione a Categoria Desejada </h5>
	<select class="form-select" id="floatingSelect">
		@foreach($categorias as $c)
			<option value="{{$c->id}}">{{$c->descricao}}</option>
		@endforeach
	</select>
	<div class="d-flex flex-row-reverse">
        <div class="mt-3">
            <button class="btn btn-lg btn-danger"> 
				Buscar
            </button>
        </div>
    </div>
@endsection

@extends('layouts.cliente')
@section('title', 'Ateliê Vovó Branca - Favoritos')
@section('set', 'Favoritos')
@section('form')
    <div class="row g-3">
        @forelse ($produtos as $p) 
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card text-center bg-light">
                <a href="{{ route('favoritos.delete', $p->id) }}"
                    class="position-absolute end-0 p-2 text-danger">
                    <i class="bi-suit-heart-fill" 
                        style="font-size: 24px;
                        line-height: 24px;">
                    </i>
                </a>
                <img class="card-img-top"
                    src="{{ asset("img/produtos/".$p->imagem)}}"
                    style="height: 171px; width: 171px;">
                <div class="card-header">
                    <h5 class="card-title truncar-2l">
                        {{$p->nome}}
                    </h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        R$ {{$p->valor}}
                    </p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('carrinho' )}}"
                        class="btn btn-danger mt-2 d-block">
                        Adicionar ao Carrinho
                    </a>
                    <small class="text-sucess">
                        {{$p->qtd_estoque}} em estoque
                    </small>
                </div>
            </div>
        </div>
        @empty
            <div class="card card-body text-center">
                <h5> Nenhum Favorito Encontrado </h5>
            </div>
        @endforelse                
    </div>
    <div class="mt-3">
@endsection

{{-- <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
    <div class="card text-center bg-light">
        <a href="#" class="position-absolute end-0 p-2 text-danger">
            <i class="bi-suit-heart-fill" style="font-size: 24px;
                line-height: 24px;"></i>
        </a>
        <img src="{{ asset('img/produtos/000003.png') }}"
            class="card-img-top">
        <div class="card-header">
            <h5 class="card-title truncar-2l">
                Kit Para Nicho Bonecas de Pano Bailarinas
            </h5>
        </div>
        <div class="card-body">
            R$ 329,90
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-light disabled mt-2 d-block">
                <small>Reabastecendo Estoque</small>
            </a>
            <small class="text-danger">
                <b>Produto Esgotado</b>
            </small>
        </div>
    </div>
</div> --}}     




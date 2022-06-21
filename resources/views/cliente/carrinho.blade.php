@extends('layouts.app')
@section('title', 'Ateliê Vovó Branca - Carrinho')
@section('content')
    @inject('d', 'App\Services\CarrinhoService')

    <div class="container">
        <h1>Carrinho de Compras</h1>
        <ul class="list-group mb-3">
        @forelse ($produtos as $p)
            <li class="list-group-item py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col-lg-2">
                        <a href="#">
                            <img class="img-thumbnail"
                                src="{{ asset("img/produtos/".$p->imagem)}}">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left 
                        align-self-center">
                        <h4>
                            <b>
                                <a href="#" 
                                    class="text-decoration-none text-dark">
                                    {{ $p->nome }}
                                </a>
                            </b>
                        </h4>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 offset-sm-6 
                        col-md-4 offset-md-8 col-lg-3 offset-lg-0 
                        col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                            <button class="btn btn-outline-dark btn-sm"  
                                type="button" onclick="window.location.href=
                                '{{ route('carrinho.dec', $p->id) }}'">
                                <i class="bi-caret-down" 
                                    style="font-size: 16px; line-height: 16px">
                                </i>
                            </button>
                                
                            <input disabled type="text" class="form-control  
                                text-center border-dark" value=
                                "{{ $d->getDetalhe($p->id)->quantidade }}">

                            <button class="btn btn-outline-dark btn-sm"
                                type="button" onclick="window.location.href=
                                '{{ route('carrinho.inc', $p->id) }}'">
                                <i class="bi-caret-up"
                                    style= "font-size: 16px; 
                                    line-height: 16px;">
                                </i>                              
                            </button>

                            <button class="btn border-dark btn-sm"  
                                onclick="window.location.href=
                                '{{ route('carrinho.delete', $p->id) }}'"
                                type="button">    
                                    <i class="bi-trash" style=
                                        "font-size: 16px; line-height: 16px;">
                                    </i>  
                            </button>
                        </div>
                        <div class="text-end mt-2">
                            <span class="text-dark" id="valor">
                                Valor Item: R$ 
                                {{ $d->getDetalhe($p->id)->subtotal }}
                            </span>
                        </div>
                    </div>
                </div>
            </li>
        @empty
        <div class="card card-body text-center">
            <h5> Carrinho Vazio </h5>
        </div>
        @endforelse
            <li class="list-group-item py-3">
                <div class="text-end">
                    <h4 class="text-dark mb-3">
                        Valor Total: R$
                            {{ $d->getTotal() }}
                    </h4>
                    <a href="{{ route('home') }}" 
                        class="btn btn-outline-success btn-lg">
                        Continuar Comprando                            
                    </a>
                    <a href="{{ route('carrinho.concluir')}}" 
                        class="btn btn-danger btn-lg ms-2 mt-xs-3">
                        Fechar Compra
                    </a>
                </div>
            </li>
        </ul>
    </div>
@endsection



{{-- 
<div class="container">
    <h1>Carrinho de Compras</h1>
    <ul class="list-group mb-3">
        <li class="list-group-item py-3">
            <div class="row g-3">
                <div class="col-4 col-md-3 col-lg-2">
                    <a href="#">
                        <img src="{{ asset('img/produtos/000010.png')}}"
                            class="img-thumbnail">
                    </a>
                </div>
                <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left 
                    align-self-center">
                    <h4>
                        <b>
                            <a href="#" class="text-decoration-none text-dark">
                                Boneco de Pano com Macacão Tamanho G
                            </a>
                        </b>
                    </h4>
                </div>
                <div class="col-6 offset-6 col-sm-6 offset-sm-6 
                        col-md-4 offset-md-8 col-lg-3 offset-lg-0 
                        col-xl-2 align-self-center mt-3">
                    <div class="input-group">
                        <button class="btn btn-outline-dark btn-sm" type="button">
                            <i class="bi-caret-down" 
                                style="font-size: 16px; line-height: 16px;"></i>
                        </button>
                        <input type="text" class="form-control 
                            text-center border-dark" value="1">
                        <button class="btn btn-outline-dark btn-sm" type="button">
                            <i class="bi-caret-up"
                                style="font-size: 16px; line-height: 16px;"></i>
                        </button>
                        <button class="btn btn-outline-danger 
                            border-dark btn-sm" type="button">
                            <i class="bi-trash" 
                                style="font-size: 16px; line-height: 16px;"></i>
                        </button>
                    </div>
                    <div class="text-end mt-2">
                        <span class="text-dark">Valor Item: R$ 99,90</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item py-3">
            <div class="row g-3">
                <div class="col-4 col-md-3 col-lg-2">
                    <a href="#">
                        <img src="{{ asset('img/produtos/000011.png')}}"
                            class="img-thumbnail">
                    </a>
                </div>
                <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left 
                    align-self-center">
                    <h4>
                        <b>
                            <a href="#" class="text-decoration-none text-dark">
                                Boneca de Pano Porta Papel Higiênico
                            </a>
                        </b>
                    </h4>
                </div>
                <div class="col-6 offset-6 col-sm-6 offset-sm-6 
                        col-md-4 offset-md-8 col-lg-3 offset-lg-0 
                        col-xl-2 align-self-center mt-3">
                    <div class="input-group">
                        <button class="btn btn-outline-dark btn-sm" type="button">
                            <i class="bi-caret-down" 
                                style="font-size: 16px; line-height: 16px;"></i>
                        </button>
                        <input type="text" class="form-control 
                            text-center border-dark" value="1">
                        <button class="btn btn-outline-dark btn-sm" type="button">
                            <i class="bi-caret-up"
                                style="font-size: 16px; line-height: 16px;"></i>
                        </button>
                        <button class="btn btn-outline-danger 
                            border-dark btn-sm" type="button">
                            <i class="bi-trash" 
                                style="font-size: 16px; line-height: 16px;"></i>
                        </button>
                    </div>
                    <div class="text-end mt-2">
                        <span class="text-dark">Valor Item: R$ 119,90</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item py-3">
            <div class="text-end">
                <h4 class="text-dark mb-3">
                    Valor Total: R$ 219.80
                </h4>
                <a href="{{ route('home') }}" class="btn btn-outline-success btn-lg">
                    Continuar Comprando                            
                </a>
                <a href="/fechamento_itens.html" class="btn btn-danger btn-lg ms-2 mt-xs-3">Fechar Compra</a>
            </div>
        </li>
    </ul>
</div> 
--}}



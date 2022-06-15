@extends('layouts.app')

@section('title', 'Ateliê Vovó Branca - Principal')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <form class="justify-content-center justify-content-md-start
                mb-3 mb-md-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" 
                    placeholder="Digite aqui o que procura">
                    <button class="btn btn-danger">Buscar</button>
                </div>
                </form>
            </div>
            <div class="col-12 col-md-7">
                <div class="d-flex flex-row-reverse 
                    justify-content-center justify-content-md-start">
                    <form class="d-inline-block">
                        <select class="form-select form-select-sm">
                            <option>Ordenar pelo nome</option>
                            <option>Ordenar pelo menor preço</option>
                            <option>Ordenar pelo maior preço</option>
                        </select>
                    </form>
                    <nav class="d-inline-block me-3">
                        <ul class="pagination pagination-sm my-0">
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">6</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <hr mt-3>

        <div class="row g-3">
            @forelse ($produtos as $p)  
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">      
                    <div class="card text-center bg-light">                  
                        <a href="#" class="position-absolute          
                            end-0 p-2 text-danger">
                            <i class="bi-suit-heart" 
                                style="font-size: 24px;line-height: 24px;">
                            </i> 
                        </a>
                        <img class="card-img-top"
                            src="{{ asset("img/produtos/".$p->imagem)}}"> 
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
                    <h5> Nenhum Produto Cadastrado </h5>
                </div>
            @endforelse  
            {{-- <div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute end-0 p-2 text-danger">
                            <i class="bi-suit-heart" style="font-size: 24px;
                                line-height: 24px;"></i>
                        </a>
                        <img src="{{ asset('img/produtos/000002.png') }}"
                            class="card-img-top">
                        <div class="card-header">
                            <h5 class="card-title truncar-2l">
                                Boneca de Pano Bailarina Tamanho P
                            </h5>
                        </div>
                        <div class="card-body">
                            R$ 64,90
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('carrinho' )}}" class="btn btn-danger mt-2 d-block">
                                Adicionar ao Carrinho
                            </a>
                            <small class="text-sucess">4 em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
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
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute end-0 p-2 text-danger">
                            <i class="bi-suit-heart" style="font-size: 24px;
                                line-height: 24px;"></i>
                        </a>
                        <img src="{{ asset('img/produtos/000004.png') }}"
                            class="card-img-top">
                        <div class="card-header">
                            <h5 class="card-title truncar-2l">
                                Boneca de Pano Bailarina Tamanho G
                            </h5>
                        </div>
                        <div class="card-body">
                            R$ 149,90
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('carrinho' )}}" class="btn btn-danger mt-2 d-block">
                                Adicionar ao Carrinho
                            </a>
                            <small class="text-sucess">2 em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute end-0 p-2 text-danger">
                            <i class="bi-suit-heart" style="font-size: 24px;
                                line-height: 24px;"></i>
                        </a>
                        <img src="{{ asset('img/produtos/000005.png') }}"
                            class="card-img-top">
                        <div class="card-header">
                            <h5 class="card-title truncar-2l">
                                Kit Para Nicho Bonecos de Pano com Macacão
                            </h5>
                        </div>
                        <div class="card-body">
                            R$ 239,90
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('carrinho' )}}" class="btn btn-danger mt-2 d-block">
                                Adicionar ao Carrinho
                            </a>
                            <small class="text-sucess">3 em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute end-0 p-2 text-danger">
                            <i class="bi-suit-heart" style="font-size: 24px;
                                line-height: 24px;"></i>
                        </a>
                        <img src="{{ asset('img/produtos/000006.png') }}"
                            class="card-img-top">
                        <div class="card-header">
                            <h5 class="card-title truncar-2l">
                                Boneca de Pano Bailarina Tamanho M
                            </h5>
                        </div>
                        <div class="card-body">
                            R$ 119,90
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('carrinho' )}}" class="btn btn-danger mt-2 d-block">
                                Adicionar ao Carrinho
                            </a>
                            <small class="text-sucess">2 em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute end-0 p-2 text-danger">
                            <i class="bi-suit-heart" style="font-size: 24px;
                                line-height: 24px;"></i>
                        </a>
                        <img src="{{ asset('img/produtos/000007.png') }}"
                            class="card-img-top">
                        <div class="card-header">
                            <h5 class="card-title truncar-2l">
                                Bananas de Pijama
                            </h5>
                        </div>
                        <div class="card-body">
                            R$ 170,00
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('carrinho' )}}" class="btn btn-danger mt-2 d-block">
                                Adicionar ao Carrinho
                            </a>
                            <small class="text-sucess">4 em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute end-0 p-2 text-danger">
                            <i class="bi-suit-heart-fill" style="font-size: 24px;
                                line-height: 24px;"></i>
                        </a>
                        <img src="{{ asset('img/produtos/000008.png') }}" 
                            class="card-img-top">
                        <div class="card-header">
                            <h5 class="card-title truncar-2l">
                                Kit Bonecas de Pano de Vestido
                            </h5>
                        </div>
                        <div class="card-body">
                            R$ 330,00
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('carrinho' )}}" class="btn btn-danger mt-2 d-block">
                                Adicionar ao Carrinho
                            </a>
                            <small class="text-sucess">2 em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute end-0 p-2 text-danger">
                            <i class="bi-suit-heart" style="font-size: 24px;
                                line-height: 24px;"></i>
                        </a>
                        <img src="{{ asset('img/produtos/000009.png') }}" 
                            class="card-img-top">
                        <div class="card-header">
                            <h5 class="card-title truncar-2l">
                                Boneco de Pano com Macacão Tamanho P
                            </h5>
                        </div>
                        <div class="card-body">
                            R$ 59,90
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('carrinho' )}}" class="btn btn-danger mt-2 d-block">
                                Adicionar ao Carrinho
                            </a>
                            <small class="text-sucess">1 em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute end-0 p-2 text-danger">
                            <i class="bi-suit-heart" style="font-size: 24px;
                                line-height: 24px;"></i>
                        </a>
                        <img src="{{ asset('img/produtos/000010.png') }}"
                            class="card-img-top">
                        <div class="card-header">
                            <h5 class="card-title truncar-2l">
                                Boneco de Pano com Macacão Tamanho G
                            </h5>
                        </div>
                        <div class="card-body">
                            R$ 99,90
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('carrinho' )}}" class="btn btn-danger mt-2 d-block">
                                Adicionar ao Carrinho
                            </a>
                            <small class="text-sucess">3 em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute end-0 p-2 text-danger">
                            <i class="bi-suit-heart" style="font-size: 24px;
                                line-height: 24px;"></i>
                        </a>
                        <img src="{{ asset('img/produtos/000011.png') }}"
                            class="card-img-top">
                        <div class="card-header">
                            <h5 class="card-title truncar-2l">
                                Boneca de Pano Porta Papel Higiênico
                            </h5>
                        </div>
                        <div class="card-body">
                            R$ 119,90
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('carrinho' )}}" class="btn btn-danger mt-2 d-block">
                                Adicionar ao Carrinho
                            </a>
                            <small class="text-sucess">2 em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute end-0 p-2 text-danger">
                            <i class="bi-suit-heart" style="font-size: 24px;
                                line-height: 24px;"></i>
                        </a>
                        <img src="{{ asset('img/produtos/000012.png') }}"
                            class="card-img-top">
                        <div class="card-header">
                            <h5 class="card-title truncar-2l">
                                Ursinho de Pano 
                            </h5>
                        </div>
                        <div class="card-body">
                            R$ 69,90
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('carrinho' )}}" class="btn btn-danger mt-2 d-block">
                                Adicionar ao Carrinho
                            </a>
                            <small class="text-sucess">1 em estoque</small>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        <hr class="mt-3">

        <div class="row pb-3">
            <div class="col-12">
                <div
                    class="d-flex flex-row-reverse justify-content-center 
                        justify-content-md-start">
                    <form class="d-inline-block">
                        <select class="form-select form-select-sm">
                            <option>Ordenar pelo nome</option>
                            <option>Ordenar pelo menor preço</option>
                            <option>Ordenar pelo maior preço</option>
                        </select>
                    </form>
                    <nav class="d-inline-block me-3">
                        <ul class="pagination pagination-sm my-0">
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">6</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection


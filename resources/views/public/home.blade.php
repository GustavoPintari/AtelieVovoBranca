<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @component('layouts/_components/head')
        @endcomponent

        <title>Ateliê Vovó Branca :: Página Principal</title>
    </head>

    <body>
        <div class="d-flex flex-column wrapper">

            @include('layouts.partials.nav_cliente')      
            
            {{-- <div class="container">
                <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0"
                            class="active"></button>
                        <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="#" class="d-none d-md-block w-100" alt="..">
                            <img src="#" class="d-block d-md-none w-100" alt="..">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="#" class="d-none d-md-block w-100" alt="..">
                            <img src="#" class="d-block d-md-none w-100" alt="..">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="#" class="d-none d-md-block w-100" alt="..">
                            <img src="#" class="d-block d-md-none w-100" alt="..">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
                <hr class="mt-3">
            </div> --}}

            <main class="flex-fill">
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

                    <hr mt-3>

                    <div class="row g-3">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card text-center bg-light">
                                <a href="#" class="position-absolute end-0 p-2 text-danger">
                                    <i class="bi-suit-heart" style="font-size: 24px;
                                    line-height: 24px;"></i>
                                </a>
                                <img src="{{ asset('img/produtos/000001.png') }}" class="card-img-top">
                                <div class="card-header">
                                    <h5 class="card-title truncar-2l">
                                        Boneca de Pano Emília
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        R$ 169,90
                                    </p>
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
            </main>

            @component('layouts/_components/footer')   
            @endcomponent      
        </div>

        @component('layouts/_components/scripts')   
        @endcomponent

    </body>

</html>

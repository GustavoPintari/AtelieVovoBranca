<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @component('layouts/_components/head')
        @endcomponent

        <title>Ateliê Vovó Branca :: Área do Cliente :: Favoritos</title>
    </head>

    <body>
        <div class="d-flex flex-column wrapper">

            @component('layouts/_components/nav_cliente')       
            @endcomponent
    
            <main class="flex-fill">
                <div class="container">
                    <h1>Favoritos</h1>
                    <div class="row gx-3 mb-3">
                        <div class="col-4">
                            <div class="list-group">
                                <a href="{{ route('dados') }}"
                                  class="list-group-item list-group-item-action">
                                    <i class="bi-person fs-6"></i> Dados Pessoais
                                </a>
                                <a href="{{ route('cliente_contato') }}"
                                  class="list-group-item list-group-item-action">
                                    <i class="bi-mailbox fs-6"></i> Contato
                                </a>
                                <a href="{{ route('endereco') }}" 
                                  class="list-group-item list-group-item-action">
                                    <i class="bi-house-door fs-6"></i> Endereço
                                </a>
                                <a href="{{ route('pedidos') }}" class="list-group-item
                                  list-group-item-action">
                                    <i class="bi-truck fs-6"></i> Pedidos
                                </a>
                                <a href="{{ route('favoritos') }}" class="list-group-item
                                  list-group-item-action bg-danger text-light">
                                    <i class="bi-heart fs-6"></i> Favoritos
                                </a>
                                <a href="/cliente_senha.html" class="list-group-item 
                                  list-group-item-action">
                                    <i class="bi-lock fs-6"></i> Alterar Senha
                                </a>
                                <a href="{{ route('home') }}" class="list-group-item
                                  list-group-item-action">
                                    <i class="bi-door-open fs-6"></i> Sair
                                </a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
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
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
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
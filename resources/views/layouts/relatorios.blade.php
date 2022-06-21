<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('site/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('site/bootstrap-icons.css') }}"> 
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="d-flex flex-column wrapper">
            @include('layouts.partials.nav_admin')

            <main class="flex-fill">
                <div class="container">
                    <h1>Relatórios</h1>
                    <hr>
                    <div class="row gx-3">
                        <div class="col-4">
                            <div class="list-group">
                                <a href="{{ route('relatorio.pc') }}"
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('relatorios/pc*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi bi-code-square"></i>
                                    Produtos por Categoria
                                </a>
                                <a href="#" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('endereco*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi bi-balloon"></i> 
                                    Clientes Aniversariantes
                                </a>
                                <a href="#" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('pedidos*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi bi-bar-chart-line"></i>
                                    Vendas Por Data
                                </a>
                                <a href="#" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('favoritos*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi bi-piggy-bank"></i>
                                    Total Adquirido por Período
                                </a>
                                <a href="#" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('favoritos*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi bi-bag-check"></i>
                                    Vendas Por Cliente
                                </a>
                                <a href="#" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('favoritos*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi bi-arrow-down-square"></i>
                                    Produtos com Estoque Baixo
                                </a>
                                <a href="#" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('favoritos*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi bi-bag-x"></i>
                                    Produtos em Falta
                                </a>
                                <a href="#" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('favoritos*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi bi-bookmark-star"></i>
                                    Produtos por total de Vendas
                                </a>
                               
                            </div>
                        </div>
                        <div class="col-8">
                            @yield('form')
                        </div>
                    </div>
                </div>
            </main>
            @include('layouts.partials.footer')
        </div>

        <script src="{{ asset('site/jquery.js') }}"></script>
        <script src="{{ asset('site/bootstrap.js') }}"></script>
        
    </body>
<html>

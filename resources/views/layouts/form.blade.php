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
                    <h1>@yield('set')</h1>
                    <div class="row gx-3">  
                        <div class="col-4">
                            <div class="list-group">
                                <a href="{{ route('produto.list') }}"
                                class="list-group-item list-group-item-action 
                                @if(Request::is('produtos*')) bg-danger text-light @endif">
                                    <i class="bi bi-clipboard2-plus"></i> Produtos
                                </a>
                                <a href="{{ route('categoria.list') }}"
                                class="list-group-item list-group-item-action
                                @if(Request::is('categorias*')) bg-danger text-light @endif">
                                    <i class="bi bi-clipboard2-plus"></i> Categorias
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

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
            @include('layouts.partials.navbar')

            <main class="flex-fill">
                <div class="container">
                    <h1>@yield('set')</h1>
                    <div class="row gx-3">
                        <div class="col-4">
                            <div class="list-group">
                                <a href="{{ route('dados.index') }}"
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('dados*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi-person fs-6"></i> 
                                    Dados Pessoais
                                </a>
                                <a href="{{ route('endereco.index') }}" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('endereco*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi-house-door fs-6"></i> 
                                    Endereço
                                </a>
                                <a href="{{ route('pedidos') }}" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('pedidos*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi-truck fs-6"></i> 
                                    Pedidos
                                </a>
                                <a href="{{ route('favoritos.index') }}" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('favoritos*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi-heart fs-6"></i> 
                                    Favoritos
                                </a>
                                {{-- <a href="/cliente_senha.html" 
                                    class="list-group-item list-group-item-action
                                    @if(Request::is('senha*')) 
                                        bg-danger text-light @endif">
                                    <i class="bi-lock fs-6"></i> 
                                    Alterar Senha
                                </a>    --}}   
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
        @include('layouts.partials.mask')
        
    </body>
<html>

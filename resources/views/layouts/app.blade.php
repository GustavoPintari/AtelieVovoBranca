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
                <div>
                    @yield('content')
                </div>  
            </main>
            @include('layouts.partials.footer')
        </div>

        <script src="{{ asset('site/jquery.js') }}"></script>
        <script src="{{ asset('site/bootstrap.js') }}"></script>
        @include('layouts.partials.mask')

        {{-- @includeIf('layouts.partials.carrinho', [Request::is('carrinho*')])--}}
        
    </body>
<html>

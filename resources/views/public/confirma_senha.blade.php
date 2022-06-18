@extends('layouts.app')

@section('title', 'Ateliê Vovó Branca - Nova senha Solicitada')

@section('content')

@endsection


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @component('layouts/_components/head')
        @endcomponent

        <title>Ateliê Vovó Branca :: Instruções Enviadas</title>
    </head>

    <body>
        <div class="d-flex flex-column wrapper">
            
            @component('layouts/_components/nav')      
            @endcomponent

            <main class="flex-fill">
                <div class="container">
                    <h1>Instruções Enviadas!</h1>
                    <hr>
                    <p>
                        Caro cliente,
                    </p>
                    <p>
                        As instruções para a realização de cadastro de uma nova senha 
                        foram enviadas para o e-mail <b>email@dominio.com.br</b>. 
                        Abra a mensagem que lhe enviamos e siga as instruções corretamente 
                        para cadastrar uma nova senha.
                    </p>
                    <p>
                        Agradecemos pela confiança em nossos serviços.
                    </p>
                    <p>
                        <a href="{{ route('home') }}" class="btn btn-lg btn-danger">
                            Voltar à Página Principal
                        </a>
                    </p>
                </div>
            </main>

            @component('layouts/_components/footer')   
            @endcomponent  
            
        </div>

        @component('layouts/_components/scripts')   
        @endcomponent
        
    </body>

</html>
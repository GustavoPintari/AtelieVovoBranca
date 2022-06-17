@extends('layouts.app')

@section('title', 'Ateliê Vovó Branca - Cadastro Concluído !')

@section('content')
    <div class="container">
        <div class="col-sm-10 col-md-8 col-lg-12">
            <h1 class="text-center">
                🎉 {{$cliente->nome}}, o seu Cadastro 
                foi realizado com sucesso 🎉 
            </h1>
            <hr>
            <h5 class="text-center mt-5">
                <p>
                    Agora você poderá adquirir os produtos da nossa Loja!
                </p>
                <p>
                    Você também poderá acessar sua área restrita clicando 
                    <a href="{{ route('dados.index') }}">aqui</a>.
                    Agradecemos pela confiança em nossos serviços.
                </p>
            </h5>         
            
            <hr class="mt-5">

            <div class="d-flex flex-row-reverse">
                <a href="{{ route('home') }}" class="btn btn-lg btn-danger">
                Voltar à Página Principal
                </a>
            </div>
        </div>
    </div>
@endsection



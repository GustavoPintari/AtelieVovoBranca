<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @component('layouts/_components/head')
        @endcomponent

        <title>Ateliê Vovó Branca :: Cadastro Concluído</title>
    </head>

    <body>
        <div class="d-flex flex-column wrapper">
            
            @component('layouts/_components/nav')      
            @endcomponent
    
            <main class="flex-fill">
                <div class="container">
                    <h1>Cadastro realizado com sucesso!</h1>
                    <hr>
                    <p>
                        Para entrar em sua área restrita agora mesmo, 
                        <a href="{{ route('login') }}">clique aqui</a>.
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
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @component('layouts/_components/head')
    @endcomponent

    <title>Ateliê Vovó Branca :: Quem Somos</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        @component('layouts/_components/nav')      
        @endcomponent

        <main class="flex-fill">
            <div class="container">
                <h1>Quem Somos</h1>
                <hr>
                <p>
                    O Ateliê Vovó Branca é uma loja virtual (e-commerce) criada no ano de 2020.
                    Todos os Produtos disponíveis na Loja são de confecção 100% artesanal.
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
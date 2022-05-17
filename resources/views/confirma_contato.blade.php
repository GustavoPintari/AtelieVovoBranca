<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    @component('layouts/_components/head')
    @endcomponent

    <title>Ateliê Vovó Branca :: Mensagem Recebida</title>
  </head>

  <body>
    <div class="d-flex flex-column wrapper">
      
      @component('layouts/_components/nav')      
      @endcomponent

      <main class="flex-fill">
        <div class="container">
          <h1>Mensagem Recebida!</h1>
          <hr>
          <p>
            Caro cliente,
          </p>
          <p>
            Informamos que sua mensagem foi recebida 
            com sucesso e que em até <b>2 dias úteis</b> 
            ela será respondida. Para evitarmos problemas
            de comunicação, evite reenviar esta mesma mensagem 
            dentro do prazo de resposta.
          </p>
          <p>
            Agradecemos pela confiança em nossos serviços.
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
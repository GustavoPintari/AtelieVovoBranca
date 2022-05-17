<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    @component('layouts/_components/head')
    @endcomponent

    <title>Ateliê Vovó Branca :: Contato</title>
  </head>

  <body>
      <div class="d-flex flex-column wrapper">
        
        @component('layouts/_components/nav')      
        @endcomponent

        <main class="flex-fill">
          <div class="container">
            <div class="row justify-content-center">
              <form class="col-sm-10 col-md-8 col-lg-6">
                <h1>Entre em contato</h1>

                <div class="form-floating mb-3">
                  <input type="text" id="txtNomeCompleto" 
                    class="form-control" placeholder="" autofocus>
                  <label for="txtNomeCompleto">Nome Completo</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="email" id="txtEmail"
                    class="form-control" placeholder="">
                  <label for="txtEmail">E-mail</label>
                </div>

                <div class="form-floating mb-3">
                  <textarea id="txtMensagem" class="form-control" 
                  placeholder="" style="height: 200px;"></textarea>
                  <label for="txtMensagem">Mensagem</label>
                </div>   

                <button type="button" 
                  onclick=window.location.href="{{ route('confirma_contato') }}"

                  class="btn btn-lg btn-danger"> Enviar Mensagem
                </button>
                
                <p class="mt-3">
                  Faremos nosso melhor para responder sua 
                  mensagem em até 2 dias úteis.
                </p>

                <p class="mt-3">
                  Atenciosamente,<br>
                  Equipe Ateliê Vovó Branca.
                </p>

              </form>
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
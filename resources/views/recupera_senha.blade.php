<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    @component('layouts/_components/head')
    @endcomponent

    <title>Ateliê Vovó Branca :: Recuperação de Senha</title>
  </head>

  <body>
    <div class="d-flex flex-column wrapper">
      @component('layouts/_components/nav')      
      @endcomponent

      <main class="flex-fill">
        <div class="container">
          <div class="row justify-content-center">
            <form class="col-sm-10 col-md-8 col-lg-4">
              <h2>Esqueceu sua Senha ?</h2>

              <div class="form-floating mb-3">
                <input type="email" id="txtEmail" 
                  class="form-control" placeholder="" autofocus>
                <label for="txtEmail">
                  E-mail
                </label>
              </div>

              <button type="button" 
                onclick=window.location.href="{{'confirma_senha'}}" 
                class="btn btn-lg btn-danger"> Recuperar Senha
              </button>
              <p class="mt-3">
                Ainda não é cadastrado ? 
                <a href="{{ route('cadastro') }}">
                  Clique aqui</a> para se cadastrar.
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
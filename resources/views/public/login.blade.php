<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    @component('layouts/_components/head')
    @endcomponent

    <title>Ateliê Vovó Branca :: Login</title>
  </head>

  <body>
    <div class="d-flex flex-column wrapper">
      
      @component('layouts/_components/nav')      
      @endcomponent

      <main class="flex-fill">
        <div class="container">
          <div class="row justify-content-center">
            <form class="col-sm-10 col-md-8 col-lg-5">
              <h1>Identifique-se, por favor</h1>

              <div class="form-floating mb-3">
                <input type="email" id="txtEmail" 
                  class="form-control" placeholder="" autofocus>
                <label for="txtEmail">E-mail</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" id="txtSenha" 
                  class="form-control" placeholder="" autofocus>
                <label for="txtSenha">Senha</label>
              </div>

              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" 
                  value="" id="chkLembrar">
                <label for="chkLembrar" class="form-check-label">
                  Lembrar de mim
                </label>
              </div>

              <button type="button" 
                onclick="window.location.href='#'" class="btn 
                btn-lg btn-danger"> Entrar
              </button>
              <p class="mt-3">
                Ainda não é cadastrado ? 
                <a href="{{ route('cadastro') }}">Clique aqui</a>
                para se cadastrar.
              </p>

              <p class="mt-3">
                Esqueceu sua senha ? 
                <a href="{{ route('recupera_senha') }}">Clique aqui</a> 
                para recuperá-la.
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
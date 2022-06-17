<nav class="navbar navbar-expand-lg navbar-dark
  bg-danger border-bottom shadow-sm mb-3">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
        <b>Ateliê Vovó Branca</b>
      </a>
      <button class="navbar-toggler" type="button" 
        data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav flex-grow-1">
          <li class="nav-item">
              <a class="nav-link text-white" 
                href="{{ route('home') }}">Principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" 
              href="{{ route('contato') }}">Contato</a>
          </li>
        </ul>

        @auth
          <div class="align-self-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link text-white" 
                    href="{{ route('dados.index') }}">Minha Conta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" 
                  href="{{ route('pedidos') }}">Pedidos</a>
              </li>                
              <li class="nav-item">
                <span
                  class="badge rounded-pill bg-light text-danger 
                    position-absolute ms-4 mt-0"
                  title="2 produto(s) no carrinho">
                  <small>2</small>
                </span>
                <a class="nav-link text-white" 
                  href="{{ route('carrinho') }}">
                    <i class="bi-cart" 
                      style="font-size:24px;line-height:24px;">
                    </i>
                </a>
              </li>          
              <li class="nav-item ms-5">
                <a class="nav-link text-white" 
                  href="{{ route('logout') }}">Sair</a>
              </li>
            </ul>
          </div>
        @endauth

        @guest
          <div class="align-self-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" 
                          href="{{ route('cadastro.create') }}">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" 
                          href="{{ route('login') }}">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <span
                            class="badge rounded-pill bg-light text-danger 
                              position-absolute ms-4 mt-0"
                            title="2 produto(s) no carrinho">
                            <small>2</small>
                        </span>
                        <a class="nav-link text-white" 
                          href="{{ route('carrinho') }}">
                            <i class="bi-cart" 
                              style="font-size:24px;line-height:24px;">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        @endguest
        
      </div>
    </div>
</nav>

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
        </ul>
        <div class="align-self-end">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" 
                  href="{{ route('produto.list') }}">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" 
                href="{{ route('admin_relatorios') }}">Relatórios</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link text-white" 
                href="{{ route('admin_caixa') }}">Caixa</a>
            </li>                         
            <li class="nav-item ms-5">
              <a class="nav-link text-white" 
                href="{{ route('home') }}">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</nav>

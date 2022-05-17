<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/estilos.css">
  <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">

  <title>Ateliê Vovó Branca :: Página Principal</title>
</head>

<body>
  <div class="d-flex flex-column wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom 
          shadow-sm mb-3">
      <div class="container">
        <a class="navbar-brand" href="/"><b>Ateliê Vovó Branca</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
              <a class="nav-link text-white" href="/index.html">Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/contato.html">Contato</a>
            </li>
          </ul>
          <div class="align-self-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="/cadastro.html">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/login.html">Entrar</a>
              </li>
              <li class="nav-item">
                <span class="badge rounded-pill bg-light text-danger 
                              position-absolute ms-4 mt-0" title="5 produto(s) no 
                              carrinho"><small>5</small></span>
                <a class="nav-link text-white" href="/carrinho.html">
                  <i class="bi-cart" style="font-size:24px;line-height:24px;"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="container">
      <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="#" class="d-none d-md-block w-100" alt="..">
            <img src="#" class="d-block d-md-none w-100" alt="..">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="#" class="d-none d-md-block w-100" alt="..">
            <img src="#" class="d-block d-md-none w-100" alt="..">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="#" class="d-none d-md-block w-100" alt="..">
            <img src="#" class="d-block d-md-none w-100" alt="..">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>
      <hr class="mt-3">
    </div>

    <main class="flex-fill">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5">
            <form class="justify-content-center justify-content-md-start
              mb-3 mb-md-0">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Digite aqui o que procura">
                <button class="btn btn-danger">Buscar</button>
              </div>
            </form>
          </div>
          <div class="col-12 col-md-7">
            <div class="d-flex flex-row-reverse justify-content-center 
                  justify-content-md-start">
              <form class="d-inline-block">
                <select class="form-select form-select-sm">
                  <option>Ordenar pelo nome</option>
                  <option>Ordenar pelo menor preço</option>
                  <option>Ordenar pelo maior preço</option>
                </select>
              </form>
              <nav class="d-inline-block me-3">
                <ul class="pagination pagination-sm my-0">
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item disabled">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">6</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <hr mt-3>

        <div class="row g-3">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000001.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title truncar-2l">Boneca de Pano Emília</h5>
              </div>
              <div class="card-body">
                <p class="card-text">
                  R$ 169,90        
                </p>
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">3 em estoque</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000002.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title truncar-2l">Boneca de Pano Bailarina Tamanho P</h5>
              </div>
              <div class="card-body">  
                R$ 64,90
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">4 em estoque</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart-fill" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000003.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title truncar-2l">Kit Para Nicho Bonecas de Pano Bailarinas</h5>
              </div>
              <div class="card-body">                
                R$ 329,90
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-light disabled mt-2 d-block">
                  <small>Reabastecendo Estoque</small>
                </a>
                <small class="text-danger">
                  <b>Produto Esgotado</b>
                </small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000004.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title truncar-2l">Boneca de Pano Bailarina Tamanho G</h5>
              </div>
              <div class="card-body">       
                R$ 149,90
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">2 em estoque</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000005.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title truncar-2l">Kit Para Nicho Bonecos de Pano com Macacão</h5>
              </div>
              <div class="card-body">              
                R$ 239,90
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">3 em estoque</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000006.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title truncar-2l">Boneca de Pano Bailarina Tamanho M</h5>
              </div>
              <div class="card-body">               
                R$ 119,90
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">2 em estoque</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000007.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title truncar-2l">Bananas de Pijama</h5>               
              </div>
              <div class="card-body">
                R$ 170,00             
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">4 em estoque</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart-fill" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000008.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title">Kit Bonecas de Pano de Vestido</h5>               
              </div>
              <div class="card-body">
                R$ 330,00
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">2 em estoque</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000009.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title truncar-2l">Boneco de Pano com Macacão Tamanho P</h5> 
              </div>
              <div class="card-body">                  
                R$ 59,90
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">1 em estoque</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000010.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title truncar-2l">Boneco de Pano com Macacão Tamanho G</h5>
              </div>
              <div class="card-body">               
                R$ 99,90
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">3 em estoque</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000011.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title truncar-2l">Boneca de Pano Porta Papel Higiênico</h5>                
              </div>
              <div class="card-body">
                R$ 119,90       
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">2 em estoque</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card text-center bg-light">
              <a href="#" class="position-absolute end-0 p-2 text-danger">
                <i class="bi-suit-heart" style="font-size: 24px; 
                  line-height: 24px;"></i>
              </a>
              <img src="/img/produtos/000012.png" class="card-img-top">
              <div class="card-header">
                <h5 class="card-title">Ursinho de Pano </h5><br>
              </div>
              <div class="card-body">               
                R$ 69,90
              </div>
              <div class="card-footer">
                <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                  Adicionar ao Carrinho
                </a>
                <small class="text-sucess">1 em estoque</small>
              </div>
            </div>
          </div>
        </div>

        <hr class="mt-3">
        <div class="row pb-3">
          <div class="col-12">
            <div class="d-flex flex-row-reverse justify-content-center 
                  justify-content-md-start">
              <form class="d-inline-block">
                <select class="form-select form-select-sm">
                  <option>Ordenar pelo nome</option>
                  <option>Ordenar pelo menor preço</option>
                  <option>Ordenar pelo maior preço</option>
                </select>
              </form>
              <nav class="d-inline-block me-3">
                <ul class="pagination pagination-sm my-0">
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item disabled">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">6</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="border-top text-muted bg-light">
      <div class="container">
        <div class="row py-3">
          <div class="col-12 col-md-4 text-center">
            2022 - Ateliê Vovó Branca <br>
            Rua Virtual, 181, Assis/SP <br>
            CNPJ 99.999.999/0001-99
          </div>
          <div class="col-12 col-md-4 text-center">
            <a href="/privacidade.html" class="text-decoration-none text-dark">
              Política de Privacidade
            </a><br>
            <a href="/termos.html" class="text-decoration-none text-dark">
              Termos de Uso
            </a><br>
            <a href="/quemsomos.html" class="text-decoration-none text-dark">
              Quem somos
            </a><br>
            <a href="/trocas.html" class="text-decoration-none text-dark">
              Trocas e Devoluções
            </a>
          </div>
          <div class="col-12 col-md-4 text-center">
            <a href="/contato.html" class="text-decoration-none text-dark">
              Contato pelo Site
            </a><br>
            E-Mail: <a href="mailto:email@dominio.com" class="text-decoration-none
                          text-dark">
              email@dominio.com
            </a><br>
            Telefone: <a href="phone:28999999999" class="text-decoration-none
                          text-dark">
              (18) 99999-9999
            </a><br>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
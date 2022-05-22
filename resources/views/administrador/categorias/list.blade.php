<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @component('layouts/_components/head')
        @endcomponent

        <title>Ateliê Vovó Branca :: Área do Administrador :: Cadastros</title>
    </head>

    <body>
        <div class="d-flex flex-column wrapper">

            @component('layouts/_components/nav_admin')       
            @endcomponent
    
            <main class="flex-fill">
                <div class="container">
                    <h1>Categorias</h1>
                    <div class="row gx-3">
                        <div class="col-4">
                            <div class="list-group">
                                <a href="{{ route('produtos') }}"
                                class="list-group-item list-group-item-action">
                                    <i class="bi bi-clipboard2-plus"></i> Produtos
                                </a>

                                <a href="{{ route('categorias') }}"
                                class="list-group-item list-group-item-action
                                bg-danger text-light">
                                    <i class="bi bi-clipboard2-plus"></i> Categorias
                                </a>         
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="accordion" id="divCategoria">
                                @foreach ($categorias as $c )
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" 
                                            type="button" data-bs-toggle="collapse"
                                                data-bs-target="#categoria{{ $c->id }}">
                                                <b> {{ $c->descricao }} </b> 
                                                <span class="mx-1">
                                                    (cadastrado em {{ date("d/m/Y", strtotime(strstr($c->created_at, ' ', true))) }})
                                                </span>                               
                                            </button>
                                        </h2>
                                        <div id="categoria{{ $c->id }}" 
                                          class="accordion-collapse collapse"
                                          data-bs-parent="#divCategoria">
                                            <div class="accordion-body">
                                                <button type="button" 
                                                    onclick="window.location.href='#'" class="btn 
                                                    btn-lg btn-danger"> Alterar
                                                </button>
                                                <button type="button" 
                                                    onclick="window.location.href='#'" class="btn 
                                                    btn-lg btn-danger"> Excluir
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" 
                                        type="button" data-bs-toggle="collapse"
                                            data-bs-target="#produto000002">
                                            <b>Boneco</b>
                                            <span class="mx-1">(cadastrado em 01/01/2022)</span>
                                        </button>
                                    </h2>
                                    <div id="produto000002" class="accordion-collapse collapse"
                                    data-bs-parent="#divProdutosTipo">
                                        <div class="accordion-body">
                                            <button type="button" 
                                                onclick="window.location.href='#'" class="btn 
                                                btn-lg btn-danger"> Alterar
                                            </button>
                                            <button type="button" 
                                                onclick="window.location.href='#'" class="btn 
                                                btn-lg btn-danger"> Excluir
                                            </button>
                                        </div>
                                    </div>
                                </div>    
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" 
                                        type="button" data-bs-toggle="collapse"
                                            data-bs-target="#tipo000003">
                                            <b>Bailarina</b>
                                            <span class="mx-1">(cadastrado em 01/01/2022)</span>
                                        </button>
                                    </h2>
                                    <div id="tipo000003" class="accordion-collapse collapse"
                                    data-bs-parent="#divProdutosTipo">
                                        <div class="accordion-body">        
                                            <button type="button" 
                                                onclick="window.location.href='#'" class="btn 
                                                btn-lg btn-danger"> Alterar
                                            </button>
                                            <button type="button" 
                                                onclick="window.location.href='#'" class="btn 
                                                btn-lg btn-danger"> Excluir
                                            </button>
                                        </div>
                                    </div>
                                </div>  
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" 
                                        type="button" data-bs-toggle="collapse"
                                            data-bs-target="#tipo000004">
                                            <b>Kit</b>
                                            <span class="mx-1">(cadastrado em 01/01/2022)</span>
                                        </button>
                                    </h2>
                                    <div id="tipo000004" class="accordion-collapse collapse"
                                    data-bs-parent="#divProdutosTipo">
                                        <div class="accordion-body">
                                            <button type="button" 
                                                onclick="window.location.href='#'" class="btn 
                                                btn-lg btn-danger"> Alterar
                                            </button>
                                            <button type="button" 
                                                onclick="window.location.href='#'" class="btn 
                                                btn-lg btn-danger"> Excluir
                                            </button>
                                        </div>
                                    </div>
                                </div>    
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" 
                                        type="button" data-bs-toggle="collapse"
                                            data-bs-target="#tipo000005">
                                            <b>Pelúcia</b>
                                            <span class="mx-1">(cadastrado em 01/01/2022)</span>
                                        </button>
                                    </h2>
                                    <div id="tipo000005" class="accordion-collapse collapse"
                                    data-bs-parent="#divProdutos">
                                        <div class="accordion-body">                      
                                            <button type="button" 
                                                onclick="window.location.href='#'" class="btn 
                                                btn-lg btn-danger"> Alterar
                                            </button>
                                            <button type="button" 
                                                onclick="window.location.href='#'" class="btn 
                                                btn-lg btn-danger"> Excluir
                                            </button>
                                        </div>
                                    </div>
                                </div>                                       
                            </div>

                            <div class="d-flex flex-row-reverse">                  
                                <button type="button" 
                                    onclick="window.location.href='#'" class="btn 
                                    btn-lg btn-danger p-2 my-3"> Cadastrar Novo
                                </button>
                            </div>
                        </div>                 
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
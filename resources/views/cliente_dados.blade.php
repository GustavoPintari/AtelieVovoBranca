<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @component('layouts/_components/head')
        @endcomponent

        <title>Ateliê Vovó Branca :: Área do Cliente :: Minha Conta</title>
    </head>

    <body>
        <div class="d-flex flex-column wrapper">

            @component('layouts/_components/nav_cliente')       
            @endcomponent
    
            <main class="flex-fill">
                <div class="container">
                    <h1>Minha Conta</h1>
                    <div class="row gx-3">
                        <div class="col-4">
                            <div class="list-group">
                                <a href="{{ route('dados') }}"
                                class="list-group-item list-group-item-action
                                bg-danger text-light">
                                    <i class="bi-person fs-6"></i> Dados Pessoais
                                </a>
                                <a href="{{ route('cliente_contato') }}"
                                class="list-group-item list-group-item-action">
                                    <i class="bi-mailbox fs-6"></i> Contatos
                                </a>
                                <a href="{{ route('endereco') }}" 
                                class="list-group-item list-group-item-action">
                                    <i class="bi-house-door fs-6"></i> Endereço
                                </a>
                                <a href="{{ route('pedidos') }}" class="list-group-item
                                list-group-item-action">
                                    <i class="bi-truck fs-6"></i> Pedidos
                                </a>
                                <a href="{{ route('favoritos') }}" class="list-group-item
                                list-group-item-action">
                                    <i class="bi-heart fs-6"></i> Favoritos
                                </a>
                                <a href="/cliente_senha.html" class="list-group-item 
                                list-group-item-action">
                                    <i class="bi-lock fs-6"></i> Alterar Senha
                                </a>
                                <a href="{{ route('home') }}" class="list-group-item
                                list-group-item-action">
                                    <i class="bi-door-open fs-6"></i> Sair
                                </a>
                            </div>
                        </div>
                        <div class="col-8">
                            <form action="">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text"
                                      id="txtNome" placeholder=" " autofocus />
                                    <label for="txtNome">Nome</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" 
                                      type="text" id="txtCPF" placeholder=" " />
                                    <label for="txtCPF">CPF</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" 
                                      type="date" id="txtDataNascimento" placeholder=" " />
                                    <label for="txtDataNascimento">Data de Nascimento</label>
                                </div>
                            </form>
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
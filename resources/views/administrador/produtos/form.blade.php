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
                                <a href="{{ route('produto.list') }}"
                                class="list-group-item list-group-item-action
                                bg-danger text-light">
                                    <i class="bi bi-clipboard2-plus"></i> Produtos
                                </a>

                                <a href="{{ route('categoria.list') }}"
                                class="list-group-item list-group-item-action">
                                    <i class="bi bi-clipboard2-plus"></i> Categorias
                                </a>         
                            </div>
                        </div>
                        <div class="col-8 px-5">
                            @if(Request::is('*/novo'))
                                <form action={{ route('produto.create') }} method="post"
                                enctype="multipart/form-data">
                                    @csrf               
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">
                                            Digite o nome do novo Produto:
                                        </label>
                                        <input name="nome" type="text"
                                        placeholder="Nome" class="form-control" id="nome">
                                    </div>

                                    <div class="mb-3">
                                        <label for="descricao" class="form-label">
                                            Descrição:
                                        </label>
                                        <textarea name="descricao" id="descricao" class="form-control" 
                                        placeholder="" style="height: 100px;"></textarea>            
                                    </div>

                                    <div class="mb-3">                                      
                                        <label for="id_categoria" class="form-label">
                                            Selecione uma Categoria:
                                        </label>
                                         <select class="form-select" name="id_categoria">
                                            @foreach ($categorias as $c)    
                                                <option value="{{$c->id}}">{{$c->descricao}}</option>
                                            @endforeach
                                        </select>              
                                    </div>

                                    <div class="mb-3">
                                        <label for="imagem" class="form-label"> 
                                            Adicione a Imagem do Produto:
                                        </label>
                                        <input type="file" class="form-control" name="imagem"
                                        id="imagem" accept="image/*">
                                    </div>          

                                    <div class="mb-3" class="form-label">                                      
                                        <label for="categoria_id" class="form-label">
                                            Selecione uma Categoria:
                                        </label>
                                         <select class="form-select" name="categoria_id">
                                            @foreach ($categorias as $c)    
                                                <option value="{{$c->id}}">{{$c->descricao}}</option>
                                            @endforeach
                                        </select>              
                                    </div>  

                                     <div class="mb-3" class="form-label">                                      
                                        <label for="visivel" class="form-label">
                                            Visibilidade:
                                        </label>
                                         <select class="form-select" name="visivel">
                                            <option value="0">Visível</option>
                                            <option value="1">Invisível</option>
                                        </select>              
                                    </div>         

                                    <div class="mb-3">
                                        <label for="valor" class="form-label">
                                            Valor:
                                        </label>
                                        <input name="valor" type="text"
                                        placeholder="Valor" class="form-control" id="valor">
                                    </div>

                                    <div class="mb-3">
                                        <label for="qtd_estoque" class="form-label">
                                            Quantidade em Estoque:
                                        </label>
                                        <input name="qtd_estoque" type="text"
                                        placeholder="Quantidade" 
                                        class="form-control" id="qtd_estoque">
                                    </div>
                              
                                    <div class="d-flex flex-row-reverse">
                                        <button type="button"                                                                          
                                            onclick="window.location.href='{{ route('produto.list') }}'"
                                            class="btn btn-lg btn-danger">
                                            Cancelar
                                        </button>
                                        <button type="submit" 
                                            class="mx-3 btn btn-lg btn-danger">
                                            Enviar
                                        </button>
                                    </div>
                                </form>
                            {{-- @elseif (Request::is('*/editar'))
                                <form action={{ route('categoria.update', $categoria->id) }} method="post">
                                @csrf
                                @method('put')
                                    <div class="mb-3">
                                        <label for="descricao" class="form-label">
                                            Digite o novo nome da Categoria:
                                        </label>
                                        <input name="descricao" type="text"
                                            value="{{ $categoria->descricao }}" class="form-control" id="descricao">
                                    </div>
                                    <div class="d-flex flex-row-reverse">
                                        <button type="button"                                                                          
                                            onclick="window.location.href='{{ route('categoria.list') }}'"
                                            class="btn btn-lg btn-danger">
                                            Cancelar
                                        </button>
                                        <button type="submit" 
                                            class="mx-3 btn btn-lg btn-danger">
                                            Alterar
                                        </button>
                                    </div>
                                </form>
                            
                            @else
                                <form action={{ route('categoria.delete', $categoria->id) }} method="post">
                                @csrf
                                @method('delete')
                                    <div class="mb-3">
                                        <label for="descricao" class="form-label">
                                            A seguinte Categoria será removida:
                                        </label>
                                        <input name="descricao" type="text" disabled
                                            value="{{ $categoria->descricao }}" class="form-control" id="descricao">
                                    </div>
                                    <div class="d-flex flex-row-reverse">
                                        <button type="button"                                                                          
                                            onclick="window.location.href='{{ route('categoria.list') }}'"
                                            class="btn btn-lg btn-danger">
                                            Cancelar
                                        </button>
                                        <button type="submit" 
                                            class="mx-3 btn btn-lg btn-danger">
                                            Remover
                                        </button>
                                    </div>
                                </form> --}}
                            @endif
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

<html>
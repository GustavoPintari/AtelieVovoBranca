<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @component('layouts/_components/head')
        @endcomponent

        <title>Ateliê Vovó Branca :: Área do Administrador :: Produtos</title>
    </head>

    <body>
        <div class="d-flex flex-column wrapper">

            @component('layouts/_components/nav_admin')       
            @endcomponent
    
            <main class="flex-fill">
                <div class="container">
                    <h1>Produtos</h1>
                    <div class="row gx-3">
                        <div class="col-4">
                            <div class="list-group">
                                <a href="{{ route('produtos') }}"
                                class="list-group-item list-group-item-action
                                bg-danger text-light">
                                    <i class="bi bi-clipboard2-plus"></i> Produtos
                                </a>

                                <a href="{{ route('categorias') }}"
                                class="list-group-item list-group-item-action">
                                    <i class="bi bi-clipboard2-plus"></i> Tipos de Produto
                                </a>
                                
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="accordion" id="divProdutos">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" 
                                        type="button" data-bs-toggle="collapse"
                                            data-bs-target="#produto000001">
                                            <b>Boneca de Pano Emília </b>
                                            <span class="mx-1">(cadastrado em 07/03/2022)</span>
                                        </button>
                                    </h2>
                                    <div id="produto000001" class="accordion-collapse collapse"
                                    data-bs-parent="#divProdutos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-center">R$ Unit.</th>
                                                        <th class="text-center">Tipo</th>
                                                        <th class="text-center">Estoque</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Boneca de Pano Emília</td>
                                                        <td class="text-center">169,90</td>
                                                        <td class="text-center">Boneca</td>
                                                        <td class="text-center">3</td>
                                                    </tr>                                            
                                                </tbody>                                                                                                                                                                                                                         
                                            </table>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Descrição</th>
                                                    </tr>                                                   
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>                                                    
                                                            Emília, uma fofura de boneca, feita com muito carinho. 
                                                            Para brincadeiras infantis e decoração de festas e quartos. 
                                                            
                                                            MATERIAL: 
                                                            Enchimento anti-alérgico; 
                                                            Pele: 100% algodão; 
                                                            Roupa: meia de malha, shorts de algodão e vestido de Oxford 
                                                            Cabelo: lã anti-alérgica 
                                                            
                                                            DIMENSÕES: 
                                                            Altura: 50,00 cm 
                                                            Peso: Entre 260 g e 280 g - devido a ser produto artesanal
                                                            
                                                            Altura: 50.00 cm
                                                            Peso: 280 g                                                             
                                                        </td> 
                                                    <tr>
                                                </tbody>
                                            </table>
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
                                            data-bs-target="#produto000002">
                                            <b>Boneca de Pano Bailarina Tamanho P</b>
                                            <span class="mx-1">(cadastrado em 06/03/2022)</span>
                                        </button>
                                    </h2>
                                    <div id="produto000002" class="accordion-collapse collapse"
                                    data-bs-parent="#divProdutos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-center">R$ Unit.</th>
                                                        <th class="text-center">Tipo</th>
                                                        <th class="text-center">Estoque</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Boneca de Pano Emília</td>
                                                        <td class="text-center">169,90</td>
                                                        <td class="text-center">Boneca</td>
                                                        <td class="text-center">3</td>
                                                    </tr>                                            
                                                </tbody>                                                                                                                                                                                                                         
                                            </table>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Descrição</th>
                                                    </tr>                                                   
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>                                                    
                                                            Emília, uma fofura de boneca, feita com muito carinho. 
                                                            Para brincadeiras infantis e decoração de festas e quartos. 
                                                            
                                                            MATERIAL: 
                                                            Enchimento anti-alérgico; 
                                                            Pele: 100% algodão; 
                                                            Roupa: meia de malha, shorts de algodão e vestido de Oxford 
                                                            Cabelo: lã anti-alérgica 
                                                            
                                                            DIMENSÕES: 
                                                            Altura: 50,00 cm 
                                                            Peso: Entre 260 g e 280 g - devido a ser produto artesanal
                                                            
                                                            Altura: 50.00 cm
                                                            Peso: 280 g                                                             
                                                        </td> 
                                                    <tr>
                                                </tbody>
                                            </table>
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
                                            data-bs-target="#produto000003">
                                            <b>Boneca de Pano Bailarina Tamanho G</b>
                                            <span class="mx-1">(cadastrado em 06/03/2022)</span>
                                        </button>
                                    </h2>
                                    <div id="produto000003" class="accordion-collapse collapse"
                                    data-bs-parent="#divProdutos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-center">R$ Unit.</th>
                                                        <th class="text-center">Tipo</th>
                                                        <th class="text-center">Estoque</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Boneca de Pano Emília</td>
                                                        <td class="text-center">169,90</td>
                                                        <td class="text-center">Boneca</td>
                                                        <td class="text-center">3</td>
                                                    </tr>                                            
                                                </tbody>                                                                                                                                                                                                                         
                                            </table>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Descrição</th>
                                                    </tr>                                                   
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>                                                    
                                                            Emília, uma fofura de boneca, feita com muito carinho. 
                                                            Para brincadeiras infantis e decoração de festas e quartos. 
                                                            
                                                            MATERIAL: 
                                                            Enchimento anti-alérgico; 
                                                            Pele: 100% algodão; 
                                                            Roupa: meia de malha, shorts de algodão e vestido de Oxford 
                                                            Cabelo: lã anti-alérgica 
                                                            
                                                            DIMENSÕES: 
                                                            Altura: 50,00 cm 
                                                            Peso: Entre 260 g e 280 g - devido a ser produto artesanal
                                                            
                                                            Altura: 50.00 cm
                                                            Peso: 280 g                                                             
                                                        </td> 
                                                    <tr>
                                                </tbody>
                                            </table>
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
                                            data-bs-target="#produto000004">
                                            <b>Kit Para Nicho Bonecos de Pano com Macacão</b>
                                            <span class="mx-1">(cadastrado em 06/03/2022)</span>
                                        </button>
                                    </h2>
                                    <div id="produto000004" class="accordion-collapse collapse"
                                    data-bs-parent="#divProdutos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-center">R$ Unit.</th>
                                                        <th class="text-center">Tipo</th>
                                                        <th class="text-center">Estoque</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Boneca de Pano Emília</td>
                                                        <td class="text-center">169,90</td>
                                                        <td class="text-center">Boneca</td>
                                                        <td class="text-center">3</td>
                                                    </tr>                                            
                                                </tbody>                                                                                                                                                                                                                         
                                            </table>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Descrição</th>
                                                    </tr>                                                   
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>                                                    
                                                            Emília, uma fofura de boneca, feita com muito carinho. 
                                                            Para brincadeiras infantis e decoração de festas e quartos. 
                                                            
                                                            MATERIAL: 
                                                            Enchimento anti-alérgico; 
                                                            Pele: 100% algodão; 
                                                            Roupa: meia de malha, shorts de algodão e vestido de Oxford 
                                                            Cabelo: lã anti-alérgica 
                                                            
                                                            DIMENSÕES: 
                                                            Altura: 50,00 cm 
                                                            Peso: Entre 260 g e 280 g - devido a ser produto artesanal
                                                            
                                                            Altura: 50.00 cm
                                                            Peso: 280 g                                                             
                                                        </td> 
                                                    <tr>
                                                </tbody>
                                            </table>
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
                                            data-bs-target="#produto000005">
                                            <b>Boneca de Pano Bailarina Tamanho M</b>
                                            <span class="mx-1">(cadastrado em 06/03/2022)</span>
                                        </button>
                                    </h2>
                                    <div id="produto000005" class="accordion-collapse collapse"
                                    data-bs-parent="#divProdutos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-center">R$ Unit.</th>
                                                        <th class="text-center">Tipo</th>
                                                        <th class="text-center">Estoque</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Boneca de Pano Emília</td>
                                                        <td class="text-center">169,90</td>
                                                        <td class="text-center">Boneca</td>
                                                        <td class="text-center">3</td>
                                                    </tr>                                            
                                                </tbody>                                                                                                                                                                                                                         
                                            </table>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Descrição</th>
                                                    </tr>                                                   
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>                                                    
                                                            Emília, uma fofura de boneca, feita com muito carinho. 
                                                            Para brincadeiras infantis e decoração de festas e quartos. 
                                                            
                                                            MATERIAL: 
                                                            Enchimento anti-alérgico; 
                                                            Pele: 100% algodão; 
                                                            Roupa: meia de malha, shorts de algodão e vestido de Oxford 
                                                            Cabelo: lã anti-alérgica 
                                                            
                                                            DIMENSÕES: 
                                                            Altura: 50,00 cm 
                                                            Peso: Entre 260 g e 280 g - devido a ser produto artesanal
                                                            
                                                            Altura: 50.00 cm
                                                            Peso: 280 g                                                             
                                                        </td> 
                                                    <tr>
                                                </tbody>
                                            </table>
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
                                            data-bs-target="#produto000006">
                                            <b>Bananas de Pijama</b>
                                            <span class="mx-1">(cadastrado em 06/03/2022)</span>
                                        </button>
                                    </h2>
                                    <div id="produto000006" class="accordion-collapse collapse"
                                    data-bs-parent="#divProdutos">
                                        <div class="accordion-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produto</th>
                                                        <th class="text-center">R$ Unit.</th>
                                                        <th class="text-center">Tipo</th>
                                                        <th class="text-center">Estoque</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Boneca de Pano Emília</td>
                                                        <td class="text-center">169,90</td>
                                                        <td class="text-center">Boneca</td>
                                                        <td class="text-center">3</td>
                                                    </tr>                                            
                                                </tbody>                                                                                                                                                                                                                         
                                            </table>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Descrição</th>
                                                    </tr>                                                   
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>                                                    
                                                            Emília, uma fofura de boneca, feita com muito carinho. 
                                                            Para brincadeiras infantis e decoração de festas e quartos. 
                                                            
                                                            MATERIAL: 
                                                            Enchimento anti-alérgico; 
                                                            Pele: 100% algodão; 
                                                            Roupa: meia de malha, shorts de algodão e vestido de Oxford 
                                                            Cabelo: lã anti-alérgica 
                                                            
                                                            DIMENSÕES: 
                                                            Altura: 50,00 cm 
                                                            Peso: Entre 260 g e 280 g - devido a ser produto artesanal
                                                            
                                                            Altura: 50.00 cm
                                                            Peso: 280 g                                                             
                                                        </td> 
                                                    <tr>
                                                </tbody>
                                            </table>
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
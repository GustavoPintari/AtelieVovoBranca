<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @component('layouts/_components/head')
    @endcomponent

    <title>Ateliê Vovó Branca :: Área do Administrador :: Caixa</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">

        @component('layouts/_components/nav_admin')
        @endcomponent

        <main class="flex-fill">
            <div class="container">
                <h1>Caixa</h1>
                <div class="row gx-3">
                    <div class="col-4">
                        <div class="list-group">
                            <a href="{{ route('admin_caixa') }}"
                                class="list-group-item list-group-item-action
                                bg-danger text-light">
                                <i class="bi bi-clipboard2-plus"></i> 
																Valor Total Arrecadado
                            </a>

                            <a href="{{ route('admin_caixa') }}" 
															class="list-group-item list-group-item-action">
                                <i class="bi bi-clipboard2-plus"></i>
                                Vendas Semanais
                            </a>

                            <a href="{{ route('admin_caixa') }}" 
															class="list-group-item list-group-item-action">
                                <i class="bi bi-clipboard2-plus"></i>
                                Vendas Mensais
                            </a>

                            <a href="{{ route('admin_caixa') }}" 
															class="list-group-item list-group-item-action">
                                <i class="bi bi-clipboard2-plus"></i>
                                Vendas Anuais
                            </a>

                        </div>
                    </div>
                    <div class="col-7 d-flex flex-row-reverse">
                        <h1 class="p-2"> R$ 1054,90 </h1>
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

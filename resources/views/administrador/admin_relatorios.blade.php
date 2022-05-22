<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		@component('layouts/_components/head')
		@endcomponent

		<title>Ateliê Vovó Branca :: Área do Administrador :: Relatórios</title>
	</head>

	<body>
		<div class="d-flex flex-column wrapper">

			@component('layouts/_components/nav_admin')
			@endcomponent

			<main class="flex-fill">
				<div class="container">
					<h1>Relatórios</h1>
					<div class="row gx-3">
						<div class="col-4">
							<div class="list-group">
								<a href="{{ route('admin_produtos') }}"
										class="list-group-item list-group-item-action
										bg-danger text-light">
										<i class="bi bi-clipboard2-plus"></i>
										Produtos Cadastrados
								</a>

								<a href="{{ route('admin_produtos') }}" class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Produtos em Estoque
								</a>

								<a href="{{ route('admin_produtotipo') }}" class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Produtos em Falta
								</a>

								<a href="{{ route('admin_produtotipo') }}" class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Produtos mais Vendidos
								</a>

								<a href="{{ route('admin_produtotipo') }}" class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Produtos menos Vendidos
								</a>

								<a href="{{ route('admin_produtotipo') }}" class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Tipos de Produtos Cadastrados
								</a>

								<a href="{{ route('admin_produtotipo') }}" class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Vendas Semanais
								</a>

								<a href="{{ route('admin_produtotipo') }}" class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Vendas Mensais
								</a>

								<a href="{{ route('admin_produtotipo') }}" class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Vendas Anuais
								</a>

								<a href="{{ route('admin_produtotipo') }}"
										class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Vendas por Cliente
								</a>

								<a href="{{ route('admin_produtotipo') }}"
										class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Clientes Aniversariantes
								</a>

								<a href="{{ route('admin_produtotipo') }}"
										class="list-group-item list-group-item-action">
										<i class="bi bi-clipboard2-plus"></i>
										Recebimentos Pendentes
								</a>
								<div class="mt-4">								
								</div>
							</div>
						</div>
						<div class="col-8">
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

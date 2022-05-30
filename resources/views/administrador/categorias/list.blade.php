@extends('layouts.form')

@section('title', 'Ateliê Vovó Branca - Categorias')
@section('set', 'Categoria')

@section('form')
    <div>
        <div class="accordion" id="divCategoria">
            @forelse ($categorias as $c)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#categoria{{ $c->id }}">
                            <b> {{ $c->descricao }} </b>
                            <span class="mx-1">
                                (cadastrado em {{ date('d/m/Y',
                                strtotime(strstr($c->created_at, ' ', true))) }})
                            </span>
                        </button>
                    </h2>
                    <div id="categoria{{ $c->id }}" 
                        class="accordion-collapse collapse" 
                        data-bs-parent="#divCategoria">
                        <div class="accordion-body">
                            <button type="button" 
                                onclick="window.location.href='{{ route('categoria.update', $c->id) }}'"
                                class="btn btn-lg btn-danger"> Alterar
                            </button>
                            <button type="button"
                                onclick="window.location.href='{{ route('categoria.delete', $c->id) }}'"
                                class="btn btn-lg btn-danger"> Remover
                            </button>
                        </div>
                    </div>
                </div>
            @empty
        </div>
        <div class="card card-body text-center">
            <h5> Nenhuma Categoria Cadastrada </h5>
        </div>
            @endforelse
        <div class="d-flex flex-row-reverse">
            <button type="button" onclick="window.location.href='{{ route('categoria.create') }}'"
                class="btn btn-lg btn-danger p-2 my-3"> Cadastrar Novo
            </button>
        </div>
    </div>
@endsection

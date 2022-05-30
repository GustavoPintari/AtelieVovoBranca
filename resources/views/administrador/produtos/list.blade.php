@extends('layouts.form')

@section('title', 'Ateliê Vovó Branca - Produtos')
@section('set', 'Produto')

@section('form')
    <div>
        <div class="accordion" id="divProduto">
            @forelse ($produtos as $p)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" 
                        type="button" data-bs-toggle="collapse"
                        data-bs-target="#produto{{ $p->id }}">
                            <b> {{ $p->nome }} </b>
                            <span class="mx-1">
                                (cadastrado em {{ date('d/m/Y',
                                strtotime(strstr($p->created_at, ' ', true))) }})
                            </span>
                        </button>
                    </h2>
                    <div id="produto{{ $p->id }}"
                        class="accordion-collapse collapse"
                        data-bs-parent="#divProduto">
                        <div class="accordion-body">
                            <button type="button" 
                                onclick="window.location.href=
                                '{{ route('produto.update', $p->id) }}'"
                                class="btn btn-lg btn-danger"> Alterar
                            </button>
                            <button type="button" 
                                onclick="window.location.href=
                                '{{ route('produto.delete', $p->id) }}'"
                                class="btn btn-lg btn-danger"> Remover
                            </button>
                        </div>
                    </div>
                </div>
            @empty
        </div>
        <div class="card card-body text-center">
            <h5> Nenhum Produto Cadastrado </h5>
        </div>
        @endforelse
        <div class="d-flex flex-row-reverse">
            <button type="button" 
                onclick="window.location.href='{{ route('produto.create') }}'"
                class="btn btn-lg btn-danger p-2 my-3"> Cadastrar Novo
            </button>
        </div>
    </div>
@endsection

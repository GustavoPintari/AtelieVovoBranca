@extends('layouts.cliente')

@section('title', 'Ateliê Vovó Branca - Endereço')
@section('set', 'Endereço')

@section('form')
    <form action="">
        <div class="row gx-1">
            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="cep" value="{{ $endereco->cep }}"
                    type="text" id="cep" disabled>
                <label for="cep"> CEP </label>
            </div>

            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="rua" value="{{ $endereco->rua }}"
                    type="text" id="rua" disabled>
                <label for="rua"> Rua </label>        
            </div> 
        </div>

        <div class="row gx-1">
            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="bairro" value="{{ $endereco->bairro }}"
                    type="text" id="bairro" disabled>
                <label for="bairro"> Bairro </label>
            </div>

            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="numero" value="{{ $endereco->numero }}"
                    type="text" id="numero" disabled>
                <label for="numero"> Numero </label>       
            </div> 
        </div>

        <div class="form-floating mb-3 col-12">
            <input class="form-control"
                name="complemento" value="{{ $endereco->complemento }}"
                type="text" id="complemento" disabled>
            <label for="complemento"> Complemento </label>
        </div>            
        <div class="d-flex flex-row-reverse">
            <div class="mb-3">
                <input type="submit" value="Alterar Endereço"
                    class="btn btn-lg btn-danger">
            </div>
        </div>              
    </form>
@endsection


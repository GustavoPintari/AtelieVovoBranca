@extends('layouts.cliente')

@section('title', 'Ateliê Vovó Branca - Endereço')
@section('set', 'Endereço')

@section('form')
    <form action="">
        <div class="row gx-1">
            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="cep" value=""
                    type="text" id="cep" disabled>
                <label for="cep"> CEP </label>
            </div>

            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="rua" value=""
                    type="text" id="rua" disabled>
                <label for="rua"> Rua </label>        
            </div> 
        </div>

        <div class="row gx-1">
            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="bairro" value=""
                    type="text" id="bairro" disabled>
                <label for="bairro"> Bairro </label>
            </div>

            <div class="form-floating mb-3 col-12 col-lg-6">
                <input class="form-control"
                    name="numero" value=""
                    type="text" id="numero" disabled>
                <label for="numero"> Numero </label>       
            </div> 
        </div>

        <div class="form-floating mb-3 col-12">
            <input class="form-control"
                name="complemento" value=""
                type="text" id="complemento" disabled>
            <label for="complemento"> Complemento </label>
        </div>                          
    </form>
@endsection


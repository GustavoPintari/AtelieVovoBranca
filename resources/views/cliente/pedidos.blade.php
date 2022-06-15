@extends('layouts.cliente')

@section('title', 'Ateliê Vovó Branca - Pedidos')
@section('set', 'Pedidos')

@section('form')
    <form class="row mb-3">
        <div class="col-12 col-md-6 mb-3">
            <div class="form-floating">
                <select class="form-select">
                    <option value="30">Últimos 30 dias</option>
                    <option value="60">Últimos 60 dias</option>
                    <option value="90">Últimos 90 dias</option>
                    <option value="180">Últimos 180 dias</option>
                    <option value="360" selected>Últimos 360 dias</option>
                    <option value="9999">Todo o período</option>
                </select>
                <label>Período</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-floating">
                <select class="form-select">
                    <option value="1" selected>Mais novos primeiro</option>
                    <option value="2">Mais antigos primeiro</option>
                </select>
                <label>Ordenação</label>
            </div>
        </div>
    </form>
    <div class="accordion" id="divPedidos">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" 
                type="button" data-bs-toggle="collapse"
                    data-bs-target="#pedido000010">
                    <b>Pedido 000010</b>
                    <span class="mx-1">(realizado em 30/04/2022)</span>
                </button>
            </h2>
            <div id="pedido000010" class="accordion-collapse collapse"
            data-bs-parent="#divPedidos">
                <div class="accordion-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th class="text-end">R$ Unit.</th>
                                <th class="text-center">Qtde.</th>
                                <th class="text-end">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Boneca de Pano Emília </td>
                                <td class="text-end">169,90</td>
                                <td class="text-center">1</td>
                                <td class="text-end">169,90</td>
                            </tr>                                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-end" colspan="3">
                                    Valor dos Produtos:
                                </th>
                                <td class="text-end">169,90</td>
                            </tr>
                            <tr>
                                <th class="text-end" colspan="3">
                                    Valor do Frete:
                                </th>
                                <td class="text-end">7,50</td>
                            </tr>
                            <tr>
                                <th class="text-end" colspan="3">
                                    Valor a Pagar:
                                </th>
                                <td class="text-end">177,40</td>
                            </tr>
                            <tr>
                                <th class="text-end" colspan="3">
                                    Forma de Pagamento:
                                </th>
                                <td class="text-end">
                                    Crédito VISA 1x
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" 
                type="button" data-bs-toggle="collapse"
                    data-bs-target="#pedido000009">
                    <b>Pedido 000009</b>
                    <span class="mx-1">(realizado em 29/04/2022)</span>
                </button>
            </h2>
            <div id="pedido000009" class="accordion-collapse collapse"
            data-bs-parent="#divPedidos">
                <div class="accordion-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th class="text-end">R$ Unit.</th>
                                <th class="text-center">Qtde.</th>
                                <th class="text-end">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Abacate Manteiga</td>
                                <td class="text-end">2,99</td>
                                <td class="text-center">3</td>
                                <td class="text-end">8,97</td>
                            </tr>
                            <tr>
                                <td>Banana Prata</td>
                                <td class="text-end">2,99</td>
                                <td class="text-center">3</td>
                                <td class="text-end">8,97</td>
                            </tr>
                            <tr>
                                <td>Mamão Papaya</td>
                                <td class="text-end">2,99</td>
                                <td class="text-center">3</td>
                                <td class="text-end">8,97</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-end" colspan="3">Valor dos Produtos:</th>
                                <td class="text-end">26,91</td>
                            </tr>
                            <tr>
                                <th class="text-end" colspan="3">Valor do Frete:</th>
                                <td class="text-end">7,50</td>
                            </tr>
                            <tr>
                                <th class="text-end" colspan="3">Valor a Pagar:</th>
                                <td class="text-end">34,41</td>
                            </tr>
                            <tr>
                                <th class="text-end" colspan="3">Forma de Pagamento:</th>
                                <td class="text-end">Crédito VISA 1x</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>                          
    </div>
@endsection






<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Produto;

use App\Models\DetalhePedido;

class CarrinhoService 
{
    public function getPedido()
    {
        $cliente = Cliente::findOrFail(Auth::id());

        $pedido = $cliente->pedidos()->get()->where(
            'status_id', '=', '1',
        )->first();

        if(empty($pedido))
        {
            $this->setPedido($pedido);
        }
        
        return $pedido->id;
    }

    public function setPedido($pedido)
    {
        $pedido = Pedido::create([
            'status_id' => 1,
            'cliente_id' => Auth::id(),
            'total' => 0, 
        ]);

        return $pedido;
    }

    public function getDetalhe($id)
    {
        $detalhe = DetalhePedido::get()->where(
            'produto_id', '=', $id,
            'pedido_id', '=', $this->getPedido(),
            'cliente_id', '=', Auth::id()
        )->first();

        if(empty($detalhe))
        {
            $this->setDetalhe($id);
        }

        return $detalhe;
    }

    public function setDetalhe($id)
    {
        $produto = Produto::findOrFail($id);
        
        DetalhePedido::create([
            'pedido_id' => $this->getPedido(),
            'produto_id' => $produto->id, 
            'quantidade' => 1,
            'subtotal' => $produto->valor,
        ]);

    }

    public function contagem()
    {
        $contagem = Pedido::find($this->getPedido());

        return $contagem->produtos()->get()->count();
    }

    public function getProdutoPedido(DetalhePedido $detalhe)
    {
        $produto = Produto::findorFail($detalhe->produto_id);

        return $produto;
    }

    public function atualizaSubtotal(DetalhePedido $detalhe)
    {
        $valor = $this->getProdutoPedido($detalhe)->valor;

        $detalhe->update((array(
            'subtotal' => $detalhe->quantidade * $valor)
        ));
    }

    public function incremento($id)
    {
        $detalhe =  $this->getDetalhe($id);
        $estoque = $this->getProdutoPedido($detalhe)->qtd_estoque;

        if($detalhe->quantidade < $estoque)
        {
            $detalhe->increment('quantidade');
            $this->atualizaSubtotal($detalhe);
        }
    }

    public function decremento($id)
    {
        $detalhe =  $this->getDetalhe($id);

        if($detalhe->quantidade > 1)
        {
            $detalhe->decrement('quantidade');
            $this->atualizaSubtotal($detalhe);
        }
    }

    public function setTotal(Pedido $pedido)
    {
        $detalhe = DetalhePedido::get()->where(
            'pedido_id', '=', $pedido->id,
        );

        $total = 0;
        foreach ($detalhe as $d)
        {   
            $total = $d->subtotal + $total;
        }

        return $pedido->update((array('total' => $total)));
    }

    public function getTotal()
    {
        $pedido = Pedido::find($this->getPedido());
        $this->setTotal($pedido);
        return $pedido->total;
    }

    public function concluirCompra()
    {
        $pedido = Pedido::find($this->getPedido());
        
        if($pedido->total != 0){
            $pedido->update(array('status_id' => 2));

            return true;
        } 

        return false;
    }
}
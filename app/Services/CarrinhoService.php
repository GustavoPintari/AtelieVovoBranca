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

    public function setPedido(Pedido $pedido)
    {
        $pedido = Pedido::create([
            'status_id' => 1,
            'cliente_id' => Auth::id(),
            'total' => 0, 
        ]);

        return $pedido;
    }

    public function getProduto($id)
    {
        $produto = DetalhePedido::get()->where(
            'produto_id', '=', $id,
            'pedido_id', '=', $this->getPedido(),
            'cliente_id', '=', Auth::id()
        )->first();

        if(empty($produto))
        {
            $this->setProduto($id);
        }

        return $produto;
    }

    public function setProduto($id)
    {
        $produto = Produto::findOrFail($id);
        
        DetalhePedido::create([
            'pedido_id' => $this->getPedido(),
            'produto_id' => $produto->id, 
            'quantidade' => 0,
            'subtotal' => $produto->valor,
        ]);
    }

    public function contagem()
    {
        $contagem = Pedido::find($this->getPedido());

        return $contagem->produtos()->get()->count();
    }
}
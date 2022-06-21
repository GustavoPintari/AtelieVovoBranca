<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Pedido;
use App\Services\CarrinhoService;

class CarrinhoController extends Controller
{
    private $carrinhoService;

    public function __construct(CarrinhoService $carrinhoService)
    {
        $this->middleware('auth');
        $this->carrinhoService = $carrinhoService;
    }

    public function index()
    {
        $pedidos = Pedido::find($this->carrinhoService->getPedido());
        $produtos = $pedidos->produtos()->get();

        return view('cliente.carrinho', compact('produtos'));
    }

    public function create($id)
    {
        $this->carrinhoService->getProduto($id);
    
        return redirect()->route('carrinho.index');
    }

    public function delete($id)
    {
        $produto = $this->carrinhoService->getProduto($id);
        $produto->delete();

        return redirect()->route('home');
    }

    public function inc($id)
    {
        $this->carrinhoService->getProduto($id)->increment('quantidade');

        $quantidade = $this->carrinhoService->getProduto($id)->quantidade;
        $subtotal = $this->carrinhoService->getProduto($id)->subtotal;
        
        $this->carrinhoService->getProduto($id)->
            update((array('subtotal' => $quantidade * $subtotal )));

        return redirect()->route('carrinho.index');
    }

    public function dec($id)
    {
        //if($this->carrinhoService->quantidade($id) > 1){
            $this->carrinhoService->getProduto($id)->decrement('quantidade');
       // }
       
        return redirect()->route('carrinho.index');
    }

}
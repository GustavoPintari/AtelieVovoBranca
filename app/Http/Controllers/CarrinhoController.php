<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Pedido;
use App\Models\Produto;
use App\Models\DetalhePedido;
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

}
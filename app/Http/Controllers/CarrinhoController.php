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
        $this->carrinhoService->getDetalhe($id);
    
        return redirect()->route('carrinho.index');
    }

    public function delete($id)
    {
        $produto = $this->carrinhoService->getDetalhe($id);
        $produto->delete();

        return redirect()->route('home');
    }

    public function inc($id)
    {
        $this->carrinhoService->incremento($id);

        return redirect()->route('carrinho.index');
    }

    public function dec($id)
    {
        $this->carrinhoService->decremento($id);
      
        return redirect()->route('carrinho.index');
    }

    public function concluir()
    {
        if($this->carrinhoService->concluirCompra())
        {
            return view('cliente.concluir');
        }

        return redirect()->route('carrinho.index');   
    }

}
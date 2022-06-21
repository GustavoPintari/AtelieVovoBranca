<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;
use App\Services\ImagemService;

class ProdutosController extends Controller
{
    private $imagemService;

    public function __construct(ImagemService $imagemService)
    {
        $this->imagemService = $imagemService;
    }

    public function index()
    {
        $produtos = Produto::get();

        return view('administrador.produtos.list',
            compact('produtos'));
    }

    public function novo()
    {
        $categorias = Categoria::get();
    
        return view('administrador.produtos.create', 
            compact('categorias'));
    }

    public function create(Request $request)
    {
        Produto::create($this->imagemService->criaImagem($request));

        return redirect()->route('produto.list');
    }

    public function atualizar($id)
    {
        $categoria = Categoria::get();
        $produto = Produto::findOrFail($id);
        $atual = $produto->categoria()->first();

        return view('administrador.produtos.update', 
            compact('categoria', 'produto', 'atual'));        
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);  

        if(!empty($request->imagem))
        {
            $this->imagemService->deletaImagem($produto);
            $produto->update($this->imagemService->criaImagem($request));
        } else {
            $produto->update($request->except('imagem'));
        }
        
        return redirect()->route('produto.list');
    }

    public function remover($id)
    {
        $produto = Produto::findOrFail($id);
        $atual = $produto->categoria()->first();

        return view('administrador.produtos.delete', 
            compact('produto', 'atual'));
    }

    public function delete(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $this->imagemService->deletaImagem($produto);
        
        $produto->delete($request->all());
        
        return redirect()->route('produto.list');
    }

}

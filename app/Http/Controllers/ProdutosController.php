<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produto::get();

        return view('administrador.produtos.list',
            compact('produtos'));
    }

    public function novo(){
        $categorias = Categoria::get();

        return view('administrador.produtos.create', 
            compact('categorias'));
    }

    public function create(Request $request){
        Produto::create($this->imagem($request));

        return redirect()->route('produto.list');
    }

    public function atualizar($id){
        $categoria = Categoria::get();
        $produto = Produto::findOrFail($id);
        $atual = $produto->categoria()->first();

        return view('administrador.produtos.update', 
            compact('categoria', 'produto', 'atual'));        
    }

    public function update(Request $request, $id){
        
        $produto = Produto::findOrFail($id);  

        if(!empty($request->imagem)){

            File::delete(public_path('img/produtos/'.$produto->imagem));
            $produto->update($this->imagem($request));

        } else {
            $produto->update($request->except('imagem'));
        }
        
        return redirect()->route('produto.list');
    }

    public function remover($id){
        $produto = Produto::findOrFail($id);
        $atual = $produto->categoria()->first();

        return view('administrador.produtos.delete', 
            compact('produto', 'atual'));
    }

    public function delete(Request $request, $id){
        $produto = Produto::findOrFail($id);
        File::delete(public_path('img/produtos/'.$produto->imagem));
        $produto->delete($request->all());
        
        return redirect()->route('produto.list');
    }

    public function imagem(Request $request){
        $input = $request->all();
        request()->validate([
            'imagem' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        $nome = time().'.'.request()->
            imagem->getClientOriginalExtension();
        request()->imagem->move(public_path('img/produtos'), $nome);
        $input['imagem'] = $nome;

        return $input;
    }

}

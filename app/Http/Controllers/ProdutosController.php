<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produto::get();
        return view('administrador.produtos.list',
            ['produtos' => $produtos]);
    }

    public function novo(){
        $categorias = Categoria::get();
        return view('administrador.produtos.create', 
            ['categorias' => $categorias]);
    }

    public function create(Request $request){

        $input = $request->all();
        request()->validate([
            'imagem' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        $imageName = time().'.'.request()->imagem->getClientOriginalExtension();
        $input['imagem'] = $imageName;
        request()->imagem->move(public_path('img/produtos'), $imageName);

        Produto::create($input);
        return redirect()->route('produto.list');
    }

    public function atualizar($id){
        
        $categoria = Categoria::get();
        $produto = Produto::findOrFail($id);
        
        return view('administrador.produtos.update', 
            ['produto' => $produto],
            ['categoria' => $categoria]
        );
    }

    public function update(Request $request, $id){
        $produto = Categoria::findOrFail($id);
        $produto->update($request->all());
        return redirect()->route('produto.list');
    }
}

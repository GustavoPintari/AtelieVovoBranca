<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categoria::get();
        return view('administrador.categorias.list', 
            ['categorias' => $categorias]);
    }

    public function novo(){
        return view('administrador.categorias.create');
    }

    public function create(Request $request){
        Categoria::create($request->all());
        return redirect()->route('categoria.list');
    }

    public function atualizar($id){
        $categoria = Categoria::findOrFail($id);

        return view('administrador.categorias.update', 
            ['categoria' => $categoria]);
    }

    public function update(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        return redirect()->route('categoria.list');
    }

    public function remover($id){
        $categoria = Categoria::findOrFail($id);
        return view('administrador.categorias.delete', 
            ['categoria' => $categoria]);
    }

    public function delete(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
        $categoria->delete($request->all());
        return redirect()->route('categoria.list');
    }

}

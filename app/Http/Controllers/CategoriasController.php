<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Illuminate\Support\Facades\Redirect;

class CategoriasController extends Controller
{

    public function index(){

        $categorias = Categoria::get();

        return view('administrador.categorias.list', ['categorias' => $categorias]);
    }

    public function novo(){
        return view('administrador.categorias.form');
    }

    public function add(Request $request){

        $categoria = new Categoria();
        $categoria->create($request->all());
     
        return Redirect::to('/categorias');

    }

    public function editar($id){
        $categoria = Categoria::findOrFail($id);
        return view('administrador.categorias.form', ['categoria' => $categoria]);
    }

    public function update(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
     
        return Redirect::to('/categorias');
    }
}

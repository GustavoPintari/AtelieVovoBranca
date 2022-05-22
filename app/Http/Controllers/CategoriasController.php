<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{

    public function index(){

        $categorias = Categoria::get();

        return view('administrador.categorias.list', ['categorias' => $categorias]);
    }

    public function new(){
        return view('administrador.form');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;
use App\Services\ImagemService;

class RelatoriosController extends Controller
{
    public function pc()
    {
        $categorias = Categoria::get();
        return view('administrador.relatorios.pc', compact('categorias'));
    }
}
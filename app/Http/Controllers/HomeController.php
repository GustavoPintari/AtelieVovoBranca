<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Produto;
use App\Models\Cliente;

class HomeController extends Controller
{

    public function index()
    {
        $produtos = Produto::get();
        
        if (Auth::user())
        {
            $cliente = Cliente::findOrFail(Auth::id());
            $f = $cliente->favoritos()->get()->pluck('id');

            return view('public.home', compact('produtos', 'f'));
        }
        
        return view('public.home', compact('produtos'));
    }
}

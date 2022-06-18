<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Produto;
use App\Models\Cliente;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Produto::get();
        $f = 0;
        
        if (Auth::user())
        {
            $cliente = Cliente::findOrFail($request->user()->id);
            $f = $cliente->favoritos()->get()->pluck('id');
        }
        
        return view('public.home', compact('produtos', 'f'));
    }
}

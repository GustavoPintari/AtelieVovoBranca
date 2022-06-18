<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Favorito;

class FavoritosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $cliente = Cliente::findOrFail($request->user()->id);
        $produtos = $cliente->favoritos()->get();

        return view('cliente.favoritos', compact('produtos'));
    }

    public function create(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($request->user()->id);
        
        $fav = $cliente->favoritos()->get()->where('id', '=', $id)->first();

        if(empty($fav))
        {
            Favorito::create([
                'cliente_id' => $request->user()->id,
                'produto_id' => $id,
            ]);
        }

        return redirect()->route('favoritos.index');
    }

    public function delete(Request $request, $id)
    {
        $favorito = Favorito::get()->where(
            'produto_id', '=', $id,
            'cliente_id', '=', $request->user()->id,
        )->first();

        $favorito->delete();

        return redirect()->route('home');
    }
}
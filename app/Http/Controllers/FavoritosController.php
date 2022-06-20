<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Cliente;
use App\Models\Favorito;


class FavoritosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cliente = Cliente::findOrFail(Auth::id());
        $produtos = $cliente->favoritos()->get();

        return view('cliente.favoritos', compact('produtos'));
    }

    public function create($id)
    {
        $cliente = Cliente::findOrFail(Auth::id());
        
        $fav = $cliente->favoritos()->get()->where('id', '=', $id)->first();

        if(empty($fav))
        {
            Favorito::create([
                'cliente_id' => $cliente->id,
                'produto_id' => $id,
            ]);
        }

        return redirect()->route('favoritos.index');
    }

    public function delete($id)
    {
        $favorito = Favorito::get()->where(
            'produto_id', '=', $id,
            'cliente_id', '=', Auth::id(),
        )->first();

        $favorito->delete();

        return redirect()->route('home');
    }
}
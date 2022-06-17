<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\Endereco;
use App\Http\Requests\DadosRequest;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cadastroConcluido(Request $request)
    {
        $cliente = Cliente::findOrFail($request->user()->id);
        return view('cliente.concluido', compact('cliente'));
    }

    public function dados(Request $request)
    {
        $cliente = Cliente::findOrFail($request->user()->id);
        return view('cliente.dados.index', compact('cliente'));
    }

    public function atualizarDados(Request $request)
    {
        $cliente = Cliente::findOrFail($request->user()->id);
        return view('cliente.dados.update', compact('cliente'));
    }

    public function updateDados(DadosRequest $request)
    {
        $cliente = Cliente::findOrFail($request->user()->id);
        $cliente->update($request->all());

        return redirect()->route('dados.index');
    }

    public function endereco(Request $request)
    {
        $cliente = Cliente::findOrFail($request->user()->id);
        $endereco = $cliente->endereco()->first();

        return view('cliente.endereco', compact('endereco'));
    }

}
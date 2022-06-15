<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $cliente = Cliente::findOrFail($request->user()->id);
        
        return view('cliente.dados', compact('cliente'));
    }

}
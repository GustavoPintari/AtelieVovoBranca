<?php

namespace App\Http\Controllers;
use App\Models\Produto;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = Produto::get();

        return view('public.home', compact('produtos'));
    }
}

<?php

namespace App\Services;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImagemService {

    public function criaImagem(Request $request){
        $input = $request->all();
        request()->validate([
            'imagem' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        $nome = time().'.'.request()->
            imagem->getClientOriginalExtension();
        request()->imagem->move(public_path('img/produtos'), $nome);
        $input['imagem'] = $nome;

        return $input;
    }

    public function deletaImagem(Produto $p){
        $imagemAtual = public_path('img/produtos/'.$p->imagem);
        if(file_exists($imagemAtual)){
            File::delete($imagemAtual);
        }
    }



}
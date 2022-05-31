<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Services\ImagemService;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    private $imagemService;

    public function __construct(ImagemService $imagemService)
    {
        $this->imagemService = $imagemService;
    }

    public function index(){
        $categorias = Categoria::get();

        return view('administrador.categorias.list', 
            compact('categorias'));
    }

    public function novo(){
        return view('administrador.categorias.create');
    }

    public function create(Request $request){
        Categoria::create($request->all());

        return redirect()->route('categoria.list');
    }

    public function atualizar($id){
        $categoria = Categoria::findOrFail($id);

        return view('administrador.categorias.update', 
            compact('categoria'));
    }

    public function update(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());

        return redirect()->route('categoria.list');
    }

    public function remover($id){
        $categoria = Categoria::findOrFail($id);
        
        return view('administrador.categorias.delete', 
            compact('categoria'));
    }

    public function delete(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
        $produtos = $categoria->produtos()->get();

        foreach($produtos as $p){
            $this->imagemService->deletaImagem($p);
        }
        
        $categoria->delete($request->all());

        return redirect()->route('categoria.list');
    }

}

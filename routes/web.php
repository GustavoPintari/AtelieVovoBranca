<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Route::get('/confirma_contato', function () {
    return view('public/confirma_contato');
})->name('confirma_contato');





Route::get('/recupera_senha', function () {
    return view('public/recupera_senha');
})->name('recupera_senha');

Route::get('/confirma_senha', function () {
    return view('public/confirma_senha');
})->name('confirma_senha');


Route::get('/endereco', function () {
    return view('cliente.endereco');
})->name('endereco');

Route::get('/pedidos', function () {
    return view('cliente.pedidos');
})->name('pedidos');





Route::get('/admin_relatorios', function () {
    return view('administrador/admin_relatorios');
})->name('admin_relatorios');

Route::get('/teste', function () {
    return view('auth.passwords.confirm');
});




Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get(
    '/concluido','ClienteController@cadastroConcluido'
)->name('concluido');

Route::prefix('cadastro')->name('cadastro.')->group(function(){
    Route::get('/', 'Auth\RegisterController@index')->name('create'); 
    Route::post('/', 'Auth\RegisterController@register'); 
});

Route::prefix('dados')->name('dados.')->group(function(){

    Route::get('/', 'ClienteController@dados')->name('index');

    Route::prefix('editar')->group(function(){
        Route::get('/', 'ClienteController@atualizarDados')->name('update');
        Route::put('/', 'ClienteController@updateDados');
    });
});

Route::prefix('endereco')->name('endereco.')->group(function(){

    Route::get('/', 'ClienteController@endereco')->name('index');

    Route::prefix('editar')->group(function(){
        Route::get('/', 'ClienteController@atualizarEndereco')->name('update');
    });
});

Route::prefix('favoritos')->name('favoritos.')->group(function(){

    Route::get('/', 'FavoritosController@index')->name('index');

    Route::get('/{id}', 'FavoritosController@create')->name('create');

    Route::get('/{id}/remover', 'FavoritosController@delete')->name('delete');
});

Route::prefix('carrinho')->name('carrinho.')->group(function() {

    Route::get('/', 'CarrinhoController@index')->name('index');

    Route::get('/{id}', 'CarrinhoController@create')->name('create');

    Route::get('/{id}/inc', 'CarrinhoController@inc')->name('inc');
    Route::get('/{id}/dec', 'CarrinhoController@dec')->name('dec');

    Route::get('/{id}/remover', 'CarrinhoController@delete')->name('delete');
});

Route::prefix('categorias')->name('categoria.')->group(function() {

    Route::get('/', 'CategoriasController@index')->name('list');

    Route::prefix('novo')->group(function(){
        Route::get('/', 'CategoriasController@novo')->name('create');
        Route::post('/', 'CategoriasController@create');
    });
    
    Route::prefix('{id}/editar')->group(function(){
        Route::get('/', 'CategoriasController@atualizar')->name('update');
        Route::put('/', 'CategoriasController@update');
    });
    
    Route::prefix('{id}/remover')->group(function(){
        Route::get('/', 'CategoriasController@remover')->name('delete');
        Route::delete('/', 'CategoriasController@delete');
    });
});

Route::prefix('produtos')->name('produto.')->group(function() {

    Route::get('/', 'ProdutosController@index')->name('list');

    Route::prefix('novo')->group(function(){
        Route::get('/', 'ProdutosController@novo')->name('create');
        Route::post('/', 'ProdutosController@create');
    });

    Route::prefix('{id}/editar')->group(function(){
        Route::get('/', 'ProdutosController@atualizar')->name('update');
        Route::put('/', 'ProdutosController@update');
    });

    Route::prefix('{id}/remover')->group(function(){
        Route::get('/', 'ProdutosController@remover')->name('delete');
        Route::delete('/', 'ProdutosController@delete');
    });
});

//Static Pages
Route::get('/sobre', function () {
    return view('public.sobre');
})->name('sobre');

Route::get('/termos', function(){
    return view('public.termos');
})->name('termos');

Route::get('/politicas', function () {
    return view('public.politicas');
})->name('politicas');

Route::get('/contato', function(){
    return view('public.contato');
})->name('contato');




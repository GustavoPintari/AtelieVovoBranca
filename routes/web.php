<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/contato', function () {
    return view('public/contato');
})->name('contato');

Route::get('/confirma_contato', function () {
    return view('public/confirma_contato');
})->name('confirma_contato');

Route::get('/carrinho', function () {
    return view('cliente/carrinho');
})->name('carrinho');

Route::get('/login', function () {
    return view('public/login');
})->name('login');

Route::get('/recupera_senha', function () {
    return view('public/recupera_senha');
})->name('recupera_senha');

Route::get('/confirma_senha', function () {
    return view('public/confirma_senha');
})->name('confirma_senha');

Route::get('cadastro', function () {
    return view('public/cadastro');
})->name('cadastro');

Route::get('/confirma_cadastro', function () {
    return view('public/confirma_cadastro');
})->name('confirma_cadastro');

Route::get('public/termos', function () {
    return view('public/termos');
})->name('termos');

Route::get('/privacidade', function () {
    return view('public/privacidade');
})->name('privacidade');

Route::get('/sobre', function () {
    return view('public/sobre');
})->name('sobre');

Route::get('/pedidos', function () {
    return view('cliente/cliente_pedidos');
})->name('pedidos');

Route::get('/favoritos', function () {
    return view('cliente/cliente_favoritos');
})->name('favoritos');

Route::get('/endereco', function () {
    return view('cliente_endereco');
})->name('endereco');

Route::get('/cliente_contato', function () {
    return view('cliente/cliente_contato');
})->name('cliente_contato');

Route::get('/dados', function () {
    return view('cliente/cliente_dados');
})->name('dados');

Route::get('/admin_relatorios', function () {
    return view('administrador/admin_relatorios');
})->name('admin_relatorios');

Route::get('/admin_caixa', function () {
    return view('administrador/admin_caixa');
})->name('admin_caixa');


Route::get('/', function () {
    return view('public/home');
})->name('home');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', 'LogoutController@perform')->name('logout');
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







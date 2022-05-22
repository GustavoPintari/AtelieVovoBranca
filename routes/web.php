<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public/home');
})->name('home');

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

Route::get('/produtos', 'ProdutosController@index')->name('produtos');
Route::get('/categorias', 'CategoriasController@index')->name('categorias');
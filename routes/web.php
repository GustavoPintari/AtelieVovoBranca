<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/confirma_contato', function () {
    return view('confirma_contato');
})->name('confirma_contato');

Route::get('/carrinho', function () {
    return view('carrinho');
})->name('carrinho');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/recupera_senha', function () {
    return view('recupera_senha');
})->name('recupera_senha');

Route::get('/confirma_senha', function () {
    return view('confirma_senha');
})->name('confirma_senha');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/confirma_cadastro', function () {
    return view('confirma_cadastro');
})->name('confirma_cadastro');

Route::get('/termos', function () {
    return view('termos');
})->name('termos');

Route::get('/privacidade', function () {
    return view('privacidade');
})->name('privacidade');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/pedidos', function () {
    return view('cliente_pedidos');
})->name('pedidos');

Route::get('/favoritos', function () {
    return view('cliente_favoritos');
})->name('favoritos');

Route::get('/endereco', function () {
    return view('cliente_endereco');
})->name('endereco');

Route::get('/cliente_contato', function () {
    return view('cliente_contato');
})->name('cliente_contato');

Route::get('/dados', function () {
    return view('cliente_dados');
})->name('dados');

Route::get('/admin_produtos', function () {
    return view('admin_produtos');
})->name('admin_produtos');

Route::get('/admin_produtotipo', function () {
    return view('admin_produtotipo');
})->name('admin_produtotipo');

Route::get('/admin_relatorios', function () {
    return view('admin_relatorios');
})->name('admin_relatorios');

Route::get('/admin_caixa', function () {
    return view('admin_caixa');
})->name('admin_caixa');


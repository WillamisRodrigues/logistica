<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login.login');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/saida_estoque', function () {
    return view('estoque.saida');
});

Route::get('/cadastro', function () {
    return view('cadastro.cadastro');
});

Route::get('/baixa_estoque', function () {
    return view('estoque.materiais');
});

Route::get('/unidades', function () {
    return view('unidade.unidades');
});

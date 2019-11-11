<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('jogo','JogoController');
Route::resource('jogador','JogadorController');
Route::resource('categoria','CategoriaController');
Route::resource('jogador-jogos','JogadorJogosController');
Route::resource('produtora','ProdutoraController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
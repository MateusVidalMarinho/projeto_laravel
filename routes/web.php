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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('jogo','JogoController');
Route::resource('jogador','JogadorController');
Route::resource('categoria','CategoriaController');
Route::resource('jogador-jogos','JogadorJogosController');
Route::resource('produtora','ProdutoraController');

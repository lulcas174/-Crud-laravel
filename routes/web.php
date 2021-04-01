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

Route::get('/produtos/novo', 'ProdutosController@create');//rota do formulario
Route::post('/produtos/novo', 'ProdutosController@store')->name('registrar_produto');//linka com a função de registrar
Route::get('/produtos/ver/{id}','ProdutosController@show');
Route::get('/produtos/editar/{id}', 'ProdutosController@edit'); //passando o ID na rota para dar get no id pelo controller
Route::post('/produtos/editar/{id}', 'ProdutosController@update')->name('alterar_produto');// script de edição
Route::get('/produtos/excluir/{id}', 'ProdutosController@delete');
Route::post('/produtos/excluir/{id}', 'ProdutosController@destroy')->name('excluir_produto');

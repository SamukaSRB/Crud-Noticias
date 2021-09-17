<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/','noticiasController@index');
Route::get('/nova_noticias','noticiasController@create');
Route::post('/salvar_noticia','noticiasController@store');
Route::get('/gerir_noticias','noticiasController@apresentarTabelaGestao');

Route::get('/colocar_invisivel/{id}','noticiasController@colocarInvisivel');
Route::get('/colocar_visivel/{id}','noticiasController@colocarVisivel');

Route::get('eliminar_noticias/{id}','noticiasController@destroy');

Route::get('editar_noticias/{id}','noticiasController@edit');

Route::post('atualizar_noticias/{id}','noticiasController@update');


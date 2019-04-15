<?php

Route::get('/', function()
{
    return '<h1>Primeira lógica com Laravel</h1>';
});


Route::get('/outra', function()
{
    return '<h1>Outra lógica com Laravel</h1>';
});


Route::get('/produtos', 'ProdutoController@lista' )->middleware('autorizador');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra' )->middleware('autorizador');
Route::get('/produtos/alterar/{id}', 'ProdutoController@alterar' )->middleware('autorizador');
Route::post('/produtos/alterar/{id}', 'ProdutoController@update' )->middleware('autorizador');
Route::get('/produtos/novo', 'ProdutoController@novo' )->middleware('autorizador');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona' )->middleware('autorizador');
Route::get('/produtos/json', 'ProdutoController@listaJson')->middleware('autorizador');
Route::get('/produtos/json2', 'ProdutoController@listaJson2')->middleware('autorizador');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove' )->middleware('autorizador');


Route::get('/login', 'Auth\LoginController@form');
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login', 'Auth\LoginController@login');


Route::get('/registrar', 'Auth\RegisterController@registrar');
Route::post('/registrar', 'Auth\RegisterController@create');

Route::get('home', 'HomeController@index');

Route::resources([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

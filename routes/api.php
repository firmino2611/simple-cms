<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('produtos/{busca}', 'Api\ProdutoController@buscarTexto');
Route::get('produtos/codigo/{codigo}/{itens?}', 'Api\ProdutoController@buscarCodigo');
Route::get('produtos', 'Api\ProdutoController@produtos');

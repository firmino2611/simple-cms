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


Route::get('/login', ['as'=>'login', 'uses'=>'Sistema\UsuarioCtrl@login']);
Route::post('/autenticar', ['as'=>'login.autenticar', 'uses'=>'Sistema\UsuarioCtrl@autenticar']);
Route::get('/registrar', ['as'=>'registrar', 'uses'=>'Sistema\UsuarioCtrl@registrar']);

Route::group(['prefix'=>'', 'middleware' => 'auth'], function(){
	
	Route::get('dashboard', 'Sistema\DashboardCtrl@home')->name('dashboard');
	Route::get('/logout', ['as'=>'logout', 'uses'=>'Sistema\UsuarioCtrl@logout']);

});




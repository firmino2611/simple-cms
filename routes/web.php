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
use Illuminate\Support\Facades\Storage;

Route::get('file', function(){
	// return \PDF::loadView('certificado')
	// 		->setPaper('a4', 'landscape')
	// 		->download('nome-arquivo-pdf-gerado.pdf');
	return Configuracao::getValue('favicon');
	// return Configuracao::createNewConfig('site', 'descricao', 'site');
	// return [Configuracao::setValue('titulo', 'Novo CMS')];
});

Route::get('/login', ['as'=>'login', 'uses'=>'Sistema\UsuarioCtrl@login']);
Route::post('/autenticar', ['as'=>'login.autenticar', 'uses'=>'Sistema\UsuarioCtrl@autenticar']);
Route::get('/registrar', ['as'=>'registrar', 'uses'=>'Sistema\UsuarioCtrl@registrar']);

Route::group(['prefix'=>'', 'middleware' => 'auth'], function(){
	
	Route::get('', 'Sistema\DashboardCtrl@home')->name('dashboard');
	Route::get('/logout', ['as'=>'logout', 'uses'=>'Sistema\UsuarioCtrl@logout']);

	Route::get('configuracoes', 'Sistema\ConfiguracaoCtrl@editar')->name('config.editar');
	Route::post('configuracoes', 'Sistema\ConfiguracaoCtrl@salvar')->name('config.salvar');

	Route::group(['prefix' => 'conteudos'], function () {
		Route::get('', 'Sistema\ConteudoCtrl@index')->name('conteudos.index');
		Route::get('criar', 'Sistema\ConteudoCtrl@criar')->name('conteudos.criar');
	});
});




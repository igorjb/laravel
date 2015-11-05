<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return 'Página HOME da aplicação';
});

Route::get('postagens', function() {
	return 'Listando as postagens';
});

Route::get('postagem/adicionar', function(){
	return 'Adicionar uma nova postagem...';
});

/**/
Route::get('postagem/editar/{id_postagem?}/categoria/{teste?}', function($id_postagem = '12', $teste = '') {
	return "Editar a postagem {$id_postagem}, {$teste}";
});

Route::get('postagem/deletar/{id_postagem}', function($id_postagem){
	return "Deletar a postagem {$id_postagem}";
})
->where('$id_postagem', '[0-9]+');

Route::group(array('prefix' => 'painel'), function(){

	Route::get('usuarios', function() {
		return 'Lista usuarios';
	});

	Route::get('newsletter', function() {
		return 'Lista newsletter';
	});

	Route::get('produtos', function() {
		return 'Lista produtos';
	});
});

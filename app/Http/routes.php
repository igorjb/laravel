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

Route::controller('postagens', 'PostagemController');

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

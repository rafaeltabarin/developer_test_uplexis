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
    return view('welcome');
});

Route::group(['prefix' => 'sintegra', 'where' => ['id'=>'[0-9]+']], function() {

	Route::get('',['as'=>'sintegra', 'uses'=>'SintegraController@index']);
	Route::get('create',['as'=>'sintegra.create', 'uses'=> 'SintegraController@create']); 
	Route::get('{id}/destroy',['as'=>'sintegra.destroy', 'uses'=>'SintegraController@destroy']);	
	Route::get('{id}/edit',['as'=>'sintegra.edit', 'uses'=>'SintegraController@edit']);
	Route::put('{id}/update',['as'=>'sintegra.update', 'uses'=>'SintegraController@update']);
	Route::post('store',['as'=>'sintegra.store', 'uses'=> 'SintegraController@store']);	

});

Route::group(['prefix' => 'usuarios', 'where' => ['id'=>'[0-9]+']], function() {

	Route::get('',['as'=>'usuarios', 'uses'=>'UsuarioController@index']);
	Route::get('create',['as'=>'usuarios.create', 'uses'=> 'UsuarioController@create']); 
	Route::get('{id}/destroy',['as'=>'usuarios.destroy', 'uses'=>'UsuarioController@destroy']);	
	Route::get('{id}/edit',['as'=>'usuarios.edit', 'uses'=>'UsuarioController@edit']);
	Route::put('{id}/update',['as'=>'usuarios.update', 'uses'=>'UsuarioController@update']);
	Route::post('store',['as'=>'usuarios.store', 'uses'=> 'UsuarioController@store']);	

});


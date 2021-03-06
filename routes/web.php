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

Route::group(['prefix' => 'admin'], function() {
     Route::resource('users','UserController');
     Route::get('users/{id}/destroy', [
        'uses' => 'UserController@destroy',
        'as'   => 'admin.users.destroy'
     ]);

     Route::resource('creyentes','NuevoCreyenteController');
     Route::get('creyentes/{cedula}/destroy', [
     	'uses' => 'NuevoCreyenteController@destroy',
     	'as'   => 'admin.creyentes.destroy'
     ]);

     Route::resource('enlaces','EnlaceController');
     Route::get('enlaces/{id}/destroy', [
        'uses' => 'EnlaceController@destroy',
        'as'   => 'admin.enlaces.destroy'
     ]);

     Route::resource('afirmadores','AfirmadorController');
     Route::get('afirmadores/{id}/destroy', [
        'uses' => 'AfirmadorController@destroy',
        'as'   => 'admin.afirmadores.destroy'
     ]);

     Route::resource('discipulado','DiscipuladoNController');
     Route::get('discipulado/{id}/destroy', [
        'uses' => 'DiscipuladoNController@destroy',
        'as'   => 'admin.discipulado.destroy'
     ]);
     Route::get('discipulado/{cedula}/create', [
        'uses' => 'DiscipuladoNController@create',
        'as'   => 'discipulado.create'
     ]);

     Route::get('servidores', [
        'uses' => 'ServidorController@index',
        'as'   => 'admin.servidores.index'
     ]);

});
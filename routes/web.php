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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/city', 'CitieController@index')->name('city');

Route::post('/city/guardar', 'CitieController@store')->name('city.guardar');

Route::get('/city/listar', 'CitieController@show')->name('city.listar');

Route::get('/city/{id}/eliminar', 'CitieController@delete')->name('city.eliminar');

Route::get('/city/{id}/editar', 'CitieController@edit')->name('city.editar');

Route::post('city/{id}/actualizar', 'CitieController@update')->name('city.actualizar');


/* rutas cliente */

Route::get('/clientes', 'ClientController@index')->name('client');

Route::post('/clientes/guardar', 'ClientController@store')->name('clientes.guardar');

Route::get('/clientes/listar', 'ClientController@show')->name('clientes.listar');

Route::get('/clientes/{id}/eliminar', 'ClientController@delete')->name('clientes.eliminar');

Route::get('/clientes/{id}/editar', 'ClientController@edit')->name('clientes.editar');

Route::post('clientes/{id}/actualizar', 'ClientController@update')->name('clientes.actualizar');

Route::get('/cliente/buscar', 'ClientController@show')->name('cliente.buscar');


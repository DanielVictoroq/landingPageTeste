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
Route::get('/', 'visitanteController@index');

Route::get('visitante/create', function()
{return view ('visitante');
});
Route::post('visitante/create' , [
	'uses' => 'visitantecontroller@inserir',
	'as' => 'visitante/create'
]);

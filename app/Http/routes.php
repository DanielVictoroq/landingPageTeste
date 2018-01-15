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
Route::get('/', 'visitanteController@index');

Route::post('visitante/create' , [
	'uses' => 'Visitantecontroller@adicionarVisitante',
	'as' => 'visitante/create'
]);
Route::get('/', function () 
{
    return view('index');
});
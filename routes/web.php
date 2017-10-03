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

Route::get('/', function ()         {return view('templates.home'); });
Route::resource('boletos','BoletoController');
Route::resource('rangos','RangoEdadeController');
Route::resource('visitantes','TipoVisitantesController');
Route::resource('tarifas','TarifaController');

Route::get('/find/{param1}{param2}','BoletoController@findtarifa');
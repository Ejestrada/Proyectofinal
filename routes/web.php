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

Route::resource('/Pieza','PiezaController');
Route::resource('/TipoPieza','TipoPiezaController');
Route::resource('/Genero','GeneroController');
Route::resource('/Libro','LibroController');
Route::resource('/Editorial','EditorialeController');
Route::resource('/Autor','AutoreController');
Route::resource('/Categoria','CategoriaController');
Route::resource('/Adquisiciones','AdquisicioneController');
Route::resource('/TipoAdquisicion','TipoAdquisicioneController');
Route::resource('/Asistente','AsistenteController');
Route::resource('/Empleado','EmpleadoController');
Route::resource('/Rol','RoleController');
Route::resource('/PDF','PDF2Controller');
Route::resource('/FichaInformativa','FichasInformativaController');
Route::resource('/Boleto','TestBoletoController');

Route::get('/buscardon','AdquisicioneController@search');

Route::group(['prefix' => '/asistente'], function () {
    Route::get('/listar', 'AsistenteController@index');
    Route::get('/generar/{post}', 'AsistenteController@generarQR');
    Route::post('/ver_qr', 'AsistenteController@guardarQR');
    Route::get('/ficha/{id}', 'AsistenteController@ficha');
});

Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

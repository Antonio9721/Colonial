<?php

use Illuminate\Support\Facades\Route;

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

//CRUD normal
Route::resource('empleados','EmpleadoController');
Route::resource('predios','PredioController');
Route::resource('cosechas','CosechaController');
Route::resource('productos','ProductoController');
Route::resource('almacens','AlmacenController');
Route::resource('insumos','InsumoController');
Route::get('empleados.viewTable', 'EmpleadoController@viewTable');

//Cosechas
Route::get('cosechas-pdf', 'CosechaController@exportToPDF')->name('cosechas.pdf');
Route::get('/cosechasXLS', 'CosechaController@exportToXls');
Route::get('/cosechasCSV', 'CosechaController@exportToCsv');

//Empleados
Route::get('empleados-pdf', 'EmpleadoController@exportToPDF')->name('empleados.pdf');
Route::get('/empleadosXLS', 'EmpleadoController@exportToXls');
Route::get('/empleadosCSV', 'EmpleadoController@exportToCsv');

//Almacenes
Route::get('almacens-pdf', 'AlmacenController@exportToPDF')->name('almacens.pdf');
Route::get('/almacensXLS', 'AlmacenController@exportToXls');
Route::get('/almacensCSV', 'AlmacenController@exportToCsv');

//Predios
Route::get('predios-pdf', 'PredioController@exportToPDF')->name('predios.pdf');
Route::get('/prediosXLS', 'PredioController@exportToXls');
Route::get('/prediosCSV', 'PredioController@exportToCsv');

//Predios
Route::get('productos-pdf', 'ProductoController@exportToPDF')->name('productos.pdf');
Route::get('/productosXLS', 'ProductoController@exportToXls');
Route::get('/productosCSV', 'ProductoController@exportToCsv');

//Insumos
Route::get('insumos-pdf', 'InsumoController@exportToPDF')->name('insumos.pdf');
Route::get('/insumosXLS', 'InsumoController@exportToXls');
Route::get('/insumosCSV', 'InsumoController@exportToCsv');

//Graficas
Route::get('graficas.graficarCosechas', 'GraficasController@graficarCosechas')->name('cosechas.grafica');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

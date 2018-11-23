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

Route::resource('biblioteca', 'bibliotecaController');
Route::resource('libro', 'librosController');
Route::resource('estudiante', 'estudiantesController');
Route::resource('empleado', 'empleadosController');
Route::resource('prestamo', 'prestamoController');

Route::get('/prueba',function(){
	return view('prueba',array('nombre' => 'Eibrajam'));
});

Route::get('/dashboard',function(){
	return view('dashboard');
});
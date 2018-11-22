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

Route::resource('empleado', 'empController');
/*
Route::resource('bibioteca', 'librosController');
Route::resource('bibioteca', 'estudiantesController');
Route::resource('bibioteca', 'empleadosController');
Route::resource('bibioteca', 'prestamoController');

Route::get('/prueba',function(){
	return view('prueba',array('nombre' => 'Eibrajam'));
});

Route::get('/dashboard',function(){
	return view('dashboard');
});
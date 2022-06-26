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

Auth::routes();

Route::view('/','welcome');
Route::get('/inicio','InicioController@index');
Route::view('/datos','modulos.datos');
Route::put('/datos', 'UsuarioController@update');
Route::get('/usuarios','UsuarioController@index');

//frontend
Route::get('/','FrontEndController@inicio');
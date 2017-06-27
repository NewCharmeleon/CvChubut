<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Ruta que maneja las Autorizaciones de Usuarios
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

//Rutas que redirigen al api segun lo que se invoque...xD
Route::resource('usuarios','UserController');
Route::resource('personas','PersonaController');
Route::resource('oferentes','OferenteController');
Route::resource('referentes','ReferenteController');
Route::resource('estudiantes','EstudianteController');
Route::resource('actividades','ActividadController');
Route::resource('carreras','CarreraController');

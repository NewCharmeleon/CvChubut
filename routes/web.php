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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
//Rutas que maneja el Auth Controller
Route::get('/home', 'HomeController@index');
//Rutas que devuelven al Home
Route::get('/', function () {
    return view('home');
});
/*Route::get('admin', [
    'as'=>'admin.index',
    'uses'=> function(){
        return view('admin.index');
    }
]);*/
//Rutas que todas vuelven al Home...SPAxD
Route::any('{all}', function () {
     return view('home');
})->where(['all' => '.*']);

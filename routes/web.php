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


Route::get('home/perfil', function () {
    return view('panel/perfil/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home/categorias', 'CategoriaController');
Route::resource('/home/productos', 'ProductoController');

Route::get('categorias/{id}/destroy', [
    'uses' => 'CategoriaController@destroy',
    'as' => 'categorias.destroy'
]);

Route::get('productos/{id}/destroy', [
    'uses' => 'ProductoController@destroy',
    'as' => 'productos.destroy'
]);

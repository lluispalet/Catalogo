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
    return view('agregar');
});

Route::get('/billeteras', 'controladorProductos@billeteras');
Route::get('/carteras', 'controladorProductos@carteras');
Route::get('/chequeras', 'controladorProductos@chequeras');
Route::get('/cinturones', 'controladorProductos@cinturones');
Route::get('/contacto', 'controladorProductos@contacto');
Route::get('/monederos', 'controladorProductos@monederos');
Route::get('/promociones', 'controladorProductos@promociones');

Route::post('/crearProducto', 'controladorProductos@store');

Route::get('/crearProducto', 'controladorProductos@create');

Route::get('/index', 'controladorProductos@index');

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


Route::get('/formulario', 'ClientController@form')->name('client.form');
Route::post('/save', 'ClientController@save');
Route::get('/index/{search?}', 'ClientController@index')->name('client.index');
Route::get('/eliminar/{id}', 'ClientController@delete')->name('client.delete');
Route::get('/activar/{id}', 'ClientController@active')->name('client.active');
Route::get('/desactivar/{id}', 'ClientController@defuse')->name('client.defuse');
Route::post('/buscar', 'ClientController@search')->name('client.search');
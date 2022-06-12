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

Route::get('/',                                                 'GameController@start');
Route::group(['prefix' => 'game'], function () {    
    Route::get('mostrar_jugadores',                             'GameController@mostrar_jugadores');
    Route::get('guardar_jugadores',                             'GameController@guardar_jugadores');
    Route::get('comprobar_letra',                               'GameController@comprobar_letra');
    Route::get('terminar_juego',                                'GameController@terminar_juego');    
    Route::get('reiniciar',                                     'GameController@reiniciar'); 
});
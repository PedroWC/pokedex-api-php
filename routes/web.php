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

// Mostra todos os pokemons

use App\Http\Controllers\PokemonsController;

Route::get('/', 'PokemonsController@showAll');
Route::get('/find', 'PokemonsController@searchBy');

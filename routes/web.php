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
    return view('landing');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/tienda', function () {
    return view('tienda');
})->name('tienda');


Route::group(['prefix'=> 'productos'],function(){

        Route::get('/pisos-madera', function () {
        return view('productos/pisos-madera');
        })->name('pisos-madera');

        Route::get('/pergolas', function () {
            return view('productos/pergolas');
        })->name('pergolas');

        Route::get('/escaleras', function () {
            return view('productos/escaleras');
            })->name('escaleras');

        Route::get('/decks', function () {
            return view('productos/decks');
            })->name('decks');

        Route::get('/revestimientos', function () {
            return view('productos/revestimientos');
            })->name('revestimientos');

        Route::get('/maderas', function () {
            return view('productos/maderas');
            })->name('maderas');

        Route::get('/zocalos', function () {
            return view('productos/zocalos');
            })->name('zocalos');

        Route::get('/pisos-melaminicos', function () {
            return view('productos/pisos-melaminicos');
            })->name('pisos-melaminicos');

        Route::get('/chapa-de-madera', function () {
            return view('productos/chapa-de-madera');
            })->name('chapa-de-madera');
});






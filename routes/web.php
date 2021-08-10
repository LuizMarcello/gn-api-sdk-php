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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('bentley.home');
})->name('bentley.home');

Route::get('/comprar/boleto', function () {
    return view('bentley.boleto.index');
})->name('bentley.comprar.boleto');

Route::get('/comprar/cartao', function () {
    return view('bentley.cartao.index');
})->name('bentley.comprar.cartao');

Route::get('/produtos', function () {
    return view('bentley.produtos');
})->name('bentley.produtos');

Route::get('/contatos', function () {
    return view('bentley.contatos');
})->name('bentley.contatos');

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
    return view('aposta/cadastro', ['script' => 'aposta.js']);
});

Route::resource('/cadastra-aposta', 'ControllerAposta');

Route::prefix('admin')->group(function () {

    Route::get('login', function () {
        return view('conta/login');
    })->name('login');

    Route::get('apostas', 'ControllerAposta@index')->name('lista');
});

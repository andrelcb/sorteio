<?php

//conta para a home do sistema de apostas, onde o usuario ja entra colocando seus dados cadastrais
Route::get('/', function () {
    return view('aposta/cadastro', ['script' => 'aposta.js']);
});

//conta para o cadastro de apostas
Route::resource('/cadastra-aposta', 'ControllerAposta');


//autenticação basica do laravel.
Auth::routes();

//grupo de admin para tudo que se relaciona a area de admintração.
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin/home');
    })->name('home');

    //rota para sorteio de loteria e avaliar o ganhador.
    Route::get('sortear', 'ControllerSorteio@sortear')->name('sortear');

    Route::get('apostas', 'ControllerAposta@index')->name('lista');
});

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

/**
 * Quando contatos for chamado, redireiciona  
*/
Route::get('/contatos', function () {
    $contatos = [
        'fulano',
        'beltrano',
        'ciclano'
    ];

    return view ('contatos', compact('contatos'));
});

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
 * Quando contatos for chamado, retorna apenas uma view  
*/
Route::get('/contatos', function () {
    $contatos = DB::table('contacts')->get();

    // return $contatos;
    return view ('contatos', compact('contatos'));
});

/* 
    Busca apenas um contato
 */
Route::get('/contatos/{contato}', function ($id) {
    
    $contato = DB::table('contacts')->find($id);

    // return $contatos;
    return view ('contato', compact('contato'));
});
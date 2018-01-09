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

use App\Contact;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Quando contatos for chamado, retorna apenas uma view  
*/
Route::get('/contacts', function () {

    //$contacts = DB::table('contacts')->get();

    // Usando Eloquent:
    $contacts = Contact::all();

    // return $contacts;
    return view ('contatos', compact('contacts'));
});

/* 
    Busca apenas um contato
 */
Route::get('/contacts/{contact}', function ($id) {
    
    $contact = Contact::find($id);

    // return $contacts;
    return view ('contato', compact('contact'));
});
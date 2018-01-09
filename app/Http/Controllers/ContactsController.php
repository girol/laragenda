<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        // Método tradicional:
        //$contacts = DB::table('contacts')->get();
        
        // Usando Eloquent:
        $contacts = Contact::all();

        // return $contacts;
        return view ('contatos', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        // return $contacts;
        return view ('contato', compact('contact'));
    }
}

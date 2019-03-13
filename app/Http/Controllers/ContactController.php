<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function store() 
    
    {
        $contact = new Contact();

        $contact->name = request('name');
        $contact->email = request('email');
        $contact->comments = request('comments');

        $contact->save();
        
        return redirect()->back()->with('message', 'Votre message a bien été soumis!');
    }
}

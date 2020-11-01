<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('user.contact.create');
    }

    public function store(Request $request)
    {
        $contact = new Contact;

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->title = $request->input('title');
        $contact->body = $request->input('body');
        $contact->contact_status = 1;
        
        $contact->save();
    
        return back();
    }
}

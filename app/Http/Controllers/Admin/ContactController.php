<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::where('contact_status', 1)->get();  
        $contacts2 = Contact::where('contact_status', 2)->get();  
        return view('admin.contact.index', compact('contacts', 'contacts2'));
    }

    public function show($contact)
    {
        $contact = Contact::find($contact);

        return view('admin.contact.show', compact('contact'));
    }

    public function update($contact)
    {
        $contact = Contact::find($contact);
        $contact->contact_status = '2';

        $contact->save();

        return back();
    }
}

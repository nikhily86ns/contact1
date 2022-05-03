<?php

namespace ankit1\contact1\Http\Controllers;

use App\Http\Controllers\Controller;

use ankit1\contact1\Models\Contact;

use ankit1\contact1\Mail\ContactMailable;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
       Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}

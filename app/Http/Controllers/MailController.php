<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class MailController extends Controller
{
    public function sendContactMail(Request $request)
    { 
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact_data = [];
        $contact_data['name'] = $request->input('name');
        $contact_data['email'] = $request->input('email');
        $contact_data['message'] = $request->input('message');
        $contact_data['subject'] = $request->input('subject');


        Mail::to('example@gmail.com')->send(new ContactFormMail($contact_data));

        return redirect()->back()->withSuccess('ელ-ფოსტა წარმატებით გაიგზავნა!');
        
    } 
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $mail_data = [
            'sender' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'body' => $request->message,
        ];
    
    Mail::to('example@gmail.com','Owner')
        ->send(new ContactMail($mail_data));
    }
}
<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    public function sendEmail(Request $request)
    {
        $details = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'msg' => 'required|max:255',
        ]);
        $details = [
            'name' => $request -> name,
            'email' => $request -> email,
            'msg' => $request -> msg,
        ];
        Mail::to('justinas.sadauskiu@gmail.com')->send(new ContactMail($details));
        return back()->with('message_send', 'Your message has been sent' );
    }
}

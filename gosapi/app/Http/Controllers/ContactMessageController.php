<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\EmailSending;
use Illuminate\Http\Request;
use App\Mail\SendMail;

class ContactMessageController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
           'name' => 'required',
           'email' => 'required|email',
           'bodymessage'=> 'required',
           'subject' => 'required'

        ]);

        $contactmail = new SendMail(
         
               $request->input('name'),
               $request->input('email'),
               $request->input('subject'),
               $request->input('bodymessage')
               
               
            );

            Mail::to('info@gosservices.com')->cc('deleajisebutu@gosservices.com')->send($contactmail);
            return response()->json([
                'message' => 'Thank you for your message'
            ]);
    }
}

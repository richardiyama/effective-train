<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\BackgroundCheckSchedule;

class BackgroundCheckScheduleController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'fullname'=> 'required',
            'workemail' => 'required|email',
            'phone' => 'required',
            'organisation'=>'required',
            'jobrole' => 'required',
            'help' => 'required',
            'companysize' => 'required'
        ]);

        $contactmail = new BackgroundCheckSchedule(
         
               $request->input('fullname'),
               $request->input('workemail'),
               $request->input('phone'),
               $request->input('organisation'),
               $request->input('jobrole'),
               $request->input('safeguard'),
               $request->input('identityverification'),
               $request->input('addressverification'),
               $request->input('guarantorverification'),
               $request->input('employmentverification'),
               $request->input('help'),
               $request->input('companysize')
               
               
            );

         Mail::to('info@gosservices.com')->cc('deleajisebutu@gosservices.com')->send($contactmail);
        return response()->json([
            'message' => 'Thank you for your message'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\LearningSchedule;

class LearningScheduleController extends Controller
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

        $contactmail = new LearningSchedule(
         
            $request->input('fullname'),
            $request->input('workemail'),
            $request->input('phone'),
            $request->input('organisation'),
            $request->input('jobrole'),
            $request->input('mangementleadership'),
            $request->input('exceptionalcustomerservice'),
            $request->input('performancemanagement'),
            $request->input('basicstressmanagement'),
            $request->input('personaleffectiviness'),
            $request->input('reportwritting'),
            $request->input('teambuilding'),
            $request->input('presentationskillsformanagers'),
            $request->input('effectivedelegationformanagers'),
            $request->input('help'),
            $request->input('companysize')
               
               
            );

            Mail::to('info@gosservices.com')->cc('deleajisebutu@gosservices.com')->send($contactmail);
            return response()->json([
                'message' => 'Thank you for your message'
            ]);
    }
}

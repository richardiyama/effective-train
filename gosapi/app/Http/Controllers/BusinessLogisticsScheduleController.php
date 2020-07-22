<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\BusinessLogisticsSchedule;

class BusinessLogisticsScheduleController extends Controller
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

        $contactmail = new BusinessLogisticsSchedule(
         
               $request->input('fullname'),
               $request->input('workemail'),
               $request->input('phone'),
               $request->input('organisation'),
               $request->input('jobrole'),
               $request->input('fleetmanagement'),
               $request->input('fleetmaintainance'),
               $request->input('protocoltravelticketing'),
               $request->input('warehousing'),
               $request->input('officemoves'),
               $request->input('help'),
               $request->input('companysize')
               
               
            );

         Mail::to('info@gosservices.com')->cc('deleajisebutu@gosservices.com')->send($contactmail);
        return response()->json([
            'message' => 'Thank you for your message'
        ]);
    }
}

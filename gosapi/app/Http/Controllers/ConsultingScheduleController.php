<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ConsultingSchedule;

class ConsultingScheduleController extends Controller
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

        $contactmail = new ConsultingSchedule(
         
            $request->input('fullname'),
            $request->input('workemail'),
            $request->input('phone'),
            $request->input('organisation'),
            $request->input('jobrole'),
            $request->input('retreat'),
            $request->input('mpr'),
            $request->input('businessplan'),
            $request->input('virtualtalenthub'),
            $request->input('benchmarking'),
            $request->input('digitalmarketing'),
            $request->input('strategicmanagement'),
            $request->input('leadershipsoftskills'),
            $request->input('customerservice'),
            $request->input('accountingfinancebanking'),
            $request->input('operationsprojectmanagement'),
            $request->input('hrmanagementteambonding'),
            $request->input('benefitscompensationsurvey'),
            $request->input('hraudit'),
            $request->input('isoaudit'),
            $request->input('facilityaudit'),
            $request->input('financialaudit'),
            $request->input('creativealternativebenefits'),
            $request->input('localinternational'),
            $request->input('eductionalcredentialverification'),
            $request->input('professionalcertificationverification'),
            $request->input('guarantorverification'),
            $request->input('kycresidenceverification'),
            $request->input('previousemployerpersonal'),
            $request->input('help'),
            $request->input('companysize')
               
               
            );

            Mail::to('info@gosservices.com')->cc('deleajisebutu@gosservices.com')->send($contactmail);
            return response()->json([
                'message' => 'Thank you for your message'
            ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\HrOutsourcingSchedule;


class HrOutsourcingScheduleController extends Controller
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
    
            $contactmail = new HrOutsourcingSchedule(
             
                $request->input('fullname'),
                $request->input('workemail'),
                $request->input('phone'),
                $request->input('organisation'),
                $request->input('jobrole'),
                $request->input('hraudit'),
                $request->input('organizationalanalysis'),
                $request->input('payrollservices'),
                $request->input('preemploymentservices'),
                $request->input('inductiononboarding'),
                $request->input('temporarypermanentstaffing'),
                $request->input('dedicatedhrprofessional'),
                $request->input('communications'),
                $request->input('legalcompliancerecordkeeping'),
                $request->input('healthsafetysecurity'),
                $request->input('customizedtraining'),
                $request->input('leadershiptraining'),
                $request->input('teambuilding'),
                $request->input('successionplanning'),
                $request->input('hr360ReviewFeedback'),
                $request->input('performancemanagement'),
                $request->input('retentionstrategies'),
                $request->input('workplaceinvestigations'),
                $request->input('coachingmentorship'),
                $request->input('benefitscompensation'),
                $request->input('help'),
                $request->input('companysize')
                   
                   
                );
    
                Mail::to('info@gosservices.com')->cc('deleajisebutu@gosservices.com')->send($contactmail);
                return response()->json([
                    'message' => 'Thank you for your message'
                ]);
        }
}

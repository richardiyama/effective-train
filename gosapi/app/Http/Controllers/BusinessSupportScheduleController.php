<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\BusinessSupportSchedule;



class BusinessSupportScheduleController extends Controller
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

        $contactmail = new  BusinessSupportSchedule(
         
            $request->input('fullname'),
            $request->input('workemail'),
            $request->input('phone'),
            $request->input('organisation'),
            $request->input('jobrole'),
            $request->input('softwaredevelopmentdatamanagement'),
            $request->input('procurementsupplies'),
            $request->input('hrpartner'),
            $request->input('emergencyresponse'),
            $request->input('digitilizationofcrimedatabase'),
            $request->input('capitalitemconsumables'),
            $request->input('printingstationery'),
            $request->input('subcontractorprequalification'),
            $request->input('contractorperformanceevaluation'),
            $request->input('auditpayroll'),
            $request->input('insurancehmohealthcarebenefits'),
            $request->input('companysecretariatleal'),
            $request->input('businessplan'),
            $request->input('businesssuportplatform'),
            $request->input('help'),
            $request->input('companysize')
               
               
            );

            Mail::to('info@gosservices.com')->cc('deleajisebutu@gosservices.com')->send($contactmail);
            return response()->json([
                'message' => 'Thank you for your message'
            ]);
    }
}

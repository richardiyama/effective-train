<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\FacilityManagementSchedule;

class FacilityManagementScheduleController extends Controller
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

        $contactmail = new FacilityManagementSchedule(
         
            $request->input('fullname'),
            $request->input('workemail'),
            $request->input('phone'),
            $request->input('organisation'),
            $request->input('jobrole'),
            $request->input('poweraudit'),
            $request->input('testingcommissioning'),
            $request->input('assetregistercoding'),
            $request->input('spaceoccupancy'),
            $request->input('buildingmaintainance'),
            $request->input('groundsmaintainance'),
            $request->input('environmentmanagement'),
            $request->input('facilitycivilengineering'),
            $request->input('cleaning'),
            $request->input('concierge'),
            $request->input('welfareFacilities'),
            $request->input('laboursupply'),
            $request->input('facilityphysicalguard'),
            $request->input('surveillancecctv'),
            $request->input('technicalinstallation'),
            $request->input('emergencymanagement'),
            $request->input('help'),
            $request->input('companysize')
               
               
            );

            Mail::to('info@gosservices.com')->cc('deleajisebutu@gosservices.com')->send($contactmail);
            return response()->json([
                'message' => 'Thank you for your message'
            ]);
    }
}

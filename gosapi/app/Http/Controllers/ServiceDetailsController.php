<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceDetails;
class ServiceDetailsController extends Controller
{
    public function index()
    {

        $servicedetailss = ServiceDetails::with(['columntwo','breadcrumbarea','findingus'])->paginate(5);
        return view('servicedetails.servicedetailss')->withServicedetailss($servicedetailss);
    }

    public function show($id)
    {
        $servicedetails = ServiceDetails::find($id);
        return view('servicedetails.servicedetails')->withServicedetails($servicedetails);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
        
        
        'content_one' =>'required',
        'content_two' =>'required',
        'content_three' =>'required',
        'content_four' => 'required',
        'title_one' => 'required',
        'title_two' =>'required',
        
      
        'list_one' =>'required',
        'list_two' =>'required',
        'list_three' =>'required',
        'list_four' =>'required',
        'list_five' =>'required',
        'list_six' =>'required',
        'list_seven' =>'required',
        'list_eight' =>'required',
        'service_image' => 'required',
        'service_booking_url' => 'required',
        'service_video' => 'required'
        ]);

        
        $servicedetails = ServiceDetails::find($request->input('id'));
        
        if($request->has('service_image')) {
            $image = $request->file('service_image');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/serviceimage'), $filename);
             $servicedetails->service_image = $request->file('service_image')->getClientOriginalName();
         }

        

         $servicedetails->name = $request->get('name');
         $servicedetails->content_one = $request->get('content_one');
         $servicedetails->content_two = $request->get('content_two');
         $servicedetails->title_one = $request->get('title_one');
         $servicedetails->title_two = $request->get('title_two');
         $servicedetails->content_three = $request->get('content_three');
         $servicedetails->content_four = $request->get('content_four');
       
         $servicedetails->list_one = $request->get('list_one');
         $servicedetails->list_two = $request->get('list_two');
         $servicedetails->list_three = $request->get('list_three');
         $servicedetails->list_four = $request->get('list_four');
         $servicedetails->list_five = $request->get('list_five');
         $servicedetails->list_six = $request->get('list_six');
         $servicedetails->list_seven = $request->get('list_seven');
         $servicedetails->list_eight = $request->get('list_eight');
         $servicedetails->service_booking_url = $request->get('service_booking_url');
         $servicedetails->service_video = $request->get('service_video');
        
        
        
         $servicedetails->save();
        
       

        return redirect('/servicedetailss')->with('success', 'Service details  updated!');
    }
}

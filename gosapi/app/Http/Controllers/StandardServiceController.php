<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StandardService;
use App\ServiceDone;
use App\Home;
class StandardServiceController extends Controller
{
    public function index()
    {
        $standardservices = StandardService::with(['homess','servicedone'])->paginate(5);
        return view('standardservice.standardservices')->withStandardservices($standardservices);
    }

    public function show($id)
    {
        $standardservice = StandardService::find($id);
        return view('standardservice.standardservice')->withStandardservice($standardservice);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'description' =>'required',
            'services_urls' => 'required',
            'services_image' => 'required',
        ]);

        
        $standardservice = StandardService::find($request->input('id'));
       
        if($request->has('services_image')) {
            $image = $request->file('services_image');
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/Standardservices'), $filename);
             $standardservice->services_image = $request->file('services_image')->getClientOriginalName();
         }

        $standardservice->name = $request->get('name');
        $standardservice->title = $request->get('title');
        $standardservice->description = $request->get('description');
        $standardservice->services_urls = $request->get('services_urls');
        
       
        
        $standardservice->save();
        
       

        return redirect('/standardservices')->with('success', 'Standard Service  updated!');
    }
    

}

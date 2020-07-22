<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
class ContactUsController extends Controller
{
    public function index()
    {
        $contactuss = ContactUs::with(['contacttoparea','breadcrumbarea','maparea'])->paginate(5);
        return view('contactus.contactuss')->withContactuss($contactuss);
    }

    public function show($id)
    {
        $contactus = ContactUs::find($id);
        return view('contactus.contactus')->withContactus($contactus);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required'
        ]);

        
        $contactus = ContactUs::find($request->input('id'));
        


        
        $contactus->name =  $request->get('name');
       
        $contactus->save();
       

        return redirect('/contactuss')->with('success', 'Contact Us updated!');
    }

}

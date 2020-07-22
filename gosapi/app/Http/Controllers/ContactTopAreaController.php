<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactTopArea;
class ContactTopAreaController extends Controller
{
    public function index()
    {
        $contacttopareas = ContactTopArea::paginate();
        return view('contacttoparea.contacttopareas')->withContacttopareas($contacttopareas);
    }

    public function show($id)
    {
        $contacttoparea = ContactTopArea::find($id);
        return view('contacttoparea.contacttoparea')->withContacttoparea($contacttoparea);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'phone_title'=>'required',
            'phone_number_one'=>'required',
            'phone_number_two'=>'required',
            'email_title'=>'required',
            'email_one'=>'required|email',
            'email_two'=>'required|email',
        
        ]);

        
        $contacttoparea = ContactTopArea::find($request->input('id'));
        

        $contacttoparea->name = $request->get('name');
        $contacttoparea->phone_title = $request->get('phone_title');
        $contacttoparea->phone_number_one = $request->get('phone_number_one');
        $contacttoparea->phone_number_two = $request->get('phone_number_two');
        $contacttoparea->email_title = $request->get('email_title');
        $contacttoparea->email_one = $request->get('email_one');
        $contacttoparea->email_two = $request->get('email_two');
       
        
        
        $contacttoparea->save();
        
       

        return redirect('/contacttopareas')->with('success', 'Contact Top Areas updated!');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
class HeaderController extends Controller
{
    public function index()
    {

        $headers = Header::paginate(5);
        return view('header.headers')->withHeaders($headers);
    }

    public function show($id)
    {
        $header = Header::find($id);
        return view('header.header')->withHeader($header);
    }
    
    public function update(Request $request)
    {
    $request->validate([
        'name' =>'required',
        'logo_image' => 'required|mimes:jpeg,png,bmp,tiff |max:4096'
    ]);

    
    $header = Header::find($request->input('id'));
    
    if($request->has('logo_image')) {
        $image = $request->file('logo_image');
          
         $filename = $image->getClientOriginalName();
         $image->move(public_path('images/header'), $filename);
         $header->logo_image = $request->file('logo_image')->getClientOriginalName();
     }

     $header->name = $request->get('name');
    
   
    
     $header->save();
    
   

    return redirect('/headers')->with('success', 'Header  updated!');
}
}



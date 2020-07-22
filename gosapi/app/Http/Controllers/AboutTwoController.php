<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutTwo;
class AboutTwoController extends Controller
{
    public function index()
    {

        $abouttwos = AboutTwo::with(['nameitemone','nameitemtwo'])->paginate(5);
        return view('abouttwo.abouttwos')->withAbouttwos($abouttwos);
    }

    public function show($id)
    {
        $abouttwo = AboutTwo::find($id);
        return view('abouttwo.abouttwo')->withAbouttwo($abouttwo);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'header_title' =>'required',
            'description'  => 'required',
            'about_image' => 'required|mimes:jpeg,png,bmp,tiff |max:4096'
        ]);

        
        $abouttwo = AboutTwo::find($request->input('id'));
        
      

       if($request->has('about_image')) {
          $image = $request->file('about_image');
            
           $filename = $image->getClientOriginalName();
           $image->move(public_path('images/aboutwos'), $filename);
           $abouttwo->about_image = $request->file('about_image')->getClientOriginalName();
       }


       $abouttwo->name = $request->get('name');
       $abouttwo->title = $request->get('title');
       $abouttwo->header_title = $request->get('header_title');
       $abouttwo->description = $request->get('description');
        
       $abouttwo->save();
        
       

        return redirect('/abouttwos')->with('success', 'About Two updated!');
    }


}

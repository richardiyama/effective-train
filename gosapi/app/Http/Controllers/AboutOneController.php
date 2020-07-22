<?php

namespace App\Http\Controllers;
use App\AboutOne;
use Illuminate\Http\Request;

class AboutOneController extends Controller
{
    public function index()
    {
        $aboutones = AboutOne::paginate(5);

        return view('aboutone.aboutones')->withAboutones($aboutones);
    }

    public function show($id)
    {
        $aboutone = AboutOne::find($id);
        return view('aboutone.aboutone')->withAboutone($aboutone);
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'content'  => 'required',
            'image' => 'required|mimes:jpeg,png,bmp,tiff |max:4096'
        ]);

        
        $aboutone = AboutOne::find($request->input('id'));
        
      

       if($request->has('image')) {
          $image = $request->file('image');
            
           $filename = $image->getClientOriginalName();
           $image->move(public_path('images/aboutones'), $filename);
           $aboutone->about_image = $request->file('image')->getClientOriginalName();
       }


       $aboutone->name = $request->get('name');
        $aboutone->title = $request->get('title');
        $aboutone->content = $request->get('content');
        
        $aboutone->save();
        
       

        return redirect('/aboutones')->with('success', 'About One updated!');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InnerAbout;
class InnerAboutController extends Controller
{
    public function index()
    {
        $innerabouts = InnerAbout::paginate(5);
        return view('innerabout.innerabouts')->withInnerabouts($innerabouts);
    }

    public function show($id)
    {
        $innerabout = InnerAbout::find($id);
        return view('innerabout.innerabout')->withInnerabout($innerabout);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'description' =>'required'
        ]);

        
        $innerabout = InnerAbout::find($request->input('id'));
        

        $innerabout->name = $request->get('name');
        $innerabout->title = $request->get('title');
        $innerabout->description = $request->get('description');
       
        
        $innerabout->save();
        
       

        return redirect('/innerabouts')->with('success', 'Inner About  updated!');
    }
}

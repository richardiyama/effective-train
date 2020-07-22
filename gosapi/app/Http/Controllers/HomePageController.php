<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
class HomePageController extends Controller
{
    public function index()
    {
        $homess = Home::with(['aboutone','singleservice','abouttwo','counteruparea'])->paginate(5);
        return view('home.homess')->withHomess($homess);
    }

    public function show($id)
    {
        $home = Home::find($id);
        return view('home.homes')->withHome($home);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required'
           
            
        ]);

        
        $home = Home::find($request->input('id'));
      

        
        
        $home->name =  $request->get('name');
        $home->title = $request->get('title');
        $home->save();
      
       

        return redirect('/homess')->with('success', 'Home updated!');
    }

}

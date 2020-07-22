<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NameItemTwo;
class NameItemTwoController extends Controller
{
    public function index()
    {
        $nameitemtwos = NameItemTwo::paginate();
        return view('nameitemtwo.nameitemtwos')->withNameitemtwos($nameitemtwos);
    }

    public function show($id)
    {
        $nameitemtwo = NameItemTwo::find($id);
        return view('nameitemtwo.nameitemtwo')->withNameitemtwo($nameitemtwo);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title_one' =>'required',
            'title_two' =>'required',
            'title_three' =>'required'
            
        
        ]);

        
        $nameitemtwo = NameItemTwo::find($request->input('id'));
        

        $nameitemtwo->name = $request->get('name');
        $nameitemtwo->title_one = $request->get('title_one');
        $nameitemtwo->title_two = $request->get('title_two');
        $nameitemtwo->title_three = $request->get('title_three');
        
        
       
        
        $nameitemtwo->save();
        
       

        return redirect('/nameitemtwos')->with('success', 'Name Item Two  updated!');
    }
}

<?php

namespace App\Http\Controllers;
use App\CounterUp;
use Illuminate\Http\Request;

class CounterUpController extends Controller
{
    public function index()
    {
        $counterups = CounterUp::paginate(5);
        return view('counterup.counterups')->withCounterups($counterups);
    }

    public function show($id)
    {
        $counterup = CounterUp::find($id);
        return view('counterup.counterup')->withCounterup($counterup);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'counter_num' =>'required|numeric',
            'title' =>'required'
        ]);

        
        $counterup = CounterUp::find($request->input('id'));
        

        $counterup->name = $request->get('name');
        $counterup->title = $request->get('title');
        $counterup->counter_num = $request->get('counter_num');
       
        
        $counterup->save();
        
       

        return redirect('/counterups')->with('success', 'Counter Up  updated!');
    }
}

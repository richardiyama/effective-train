<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CounterArea;
class CounterAreaController extends Controller
{
    public function index()
    {
        $counterareas = CounterArea::paginate(5);

        return view('counterarea.counterareas')->withCounterareas($counterareas);
    }

    public function show($id)
    {
        $counterarea = CounterArea::find($id);
        return view('counterarea.counterarea')->withCounterarea($counterarea);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'content' =>'required'
        ]);

        
        $counterarea = CounterArea::find($request->input('id'));
        

        $counterarea->name = $request->get('name');
        $counterarea->title = $request->get('title');
        $counterarea->content = $request->get('content');
       
        
        $counterarea->save();
        
       

        return redirect('/counterareas')->with('success', 'Counter Area  updated!');
    }
}

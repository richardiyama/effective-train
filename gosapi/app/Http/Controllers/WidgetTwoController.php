<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WidgetTwo;
class WidgetTwoController extends Controller
{
    public function index()
    {
        $widgettwos = WidgetTwo::paginate(5);
        return view('widgettwo.widgettwos')->withWidgettwos($widgettwos);
    }

    public function show($id)
    {
        $widgettwo = WidgetTwo::find($id);
        return view('widgettwo.widgettwo')->withWidgettwo($widgettwo);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'link_title_one' =>'required',
            'link_title_two' =>'required',
            'link_title_three' =>'required'
        ]);

        
        $widgettwo = WidgetTwo::find($request->input('id'));
        

        $widgettwo->name = $request->get('name');
        $widgettwo->title = $request->get('title');
        $widgettwo->link_title_one = $request->get('link_title_one');
        $widgettwo->link_title_two = $request->get('link_title_two');
        $widgettwo->link_title_three = $request->get('link_title_three');
       
        
        $widgettwo->save();
        
       

        return redirect('/widgettwos')->with('success', 'Widget Two updated!');
    }
}

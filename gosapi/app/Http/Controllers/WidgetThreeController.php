<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WidgetThree;
class WidgetThreeController extends Controller
{
    public function index()
    {
        $widgetthrees = WidgetThree::paginate(5);
        return view('widgetthree.widgetthrees')->withWidgetthrees($widgetthrees);
    }

    public function show($id)
    {
        $widgetthree = WidgetThree::find($id);
        return view('widgetthree.widgetthree')->withWidgetthree($widgetthree);
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

        
        $widgetthree = WidgetThree::find($request->input('id'));
        

        $widgetthree->name = $request->get('name');
        $widgetthree->title = $request->get('title');
        $widgetthree->link_title_one = $request->get('link_title_one');
        $widgetthree->link_title_two = $request->get('link_title_two');
        $widgetthree->link_title_three = $request->get('link_title_three');
       
        
        $widgetthree->save();
        
       

        return redirect('/widgetthrees')->with('success', 'Widget Three updated!');
    }
}

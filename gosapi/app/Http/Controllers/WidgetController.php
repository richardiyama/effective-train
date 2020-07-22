<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Widget;
class WidgetController extends Controller
{
    public function index()
    {
        $widgets = Widget::paginate(5);
        return view('widget.widgets')->withWidgets($widgets);
    }

    public function show($id)
    {
        $widget = Widget::find($id);
        return view('widget.widget')->withWidget($widget);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'admin_email' =>'required|email',
            'email' =>'required|email'
        ]);

        
        $widget = Widget::find($request->input('id'));
        

        $widget->name = $request->get('name');
        $widget->admin_email = $request->get('admin_email');
        $widget->email = $request->get('email');
       
        
        $widget->save();
        
       

        return redirect('/widgets')->with('success', 'Widget  updated!');
    }
}

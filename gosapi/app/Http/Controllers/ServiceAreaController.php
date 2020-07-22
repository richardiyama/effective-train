<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceArea;
class ServiceAreaController extends Controller
{
    public function index()
    {
        $serviceareas = ServiceArea::paginate(5);
        return view('servicearea.serviceareas')->withServiceareas($serviceareas);
    }

    public function show($id)
    {
        $servicearea = ServiceArea::find($id);
        return view('servicearea.servicearea')->withServicearea($servicearea);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'content' =>'required',
            'content_title' => 'required'

        ]);

        
        $servicearea = ServiceArea::find($request->input('id'));
        

        $servicearea->name = $request->get('name');
        $servicearea->title = $request->get('title');
        $servicearea->content = $request->get('content');
        $servicearea->content_title = $request->get('content_title');
       
        
        $servicearea->save();
        
       

        return redirect('/serviceareas')->with('success', 'Service Area  updated!');
    }
}

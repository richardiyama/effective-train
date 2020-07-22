<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SingleService;
class SingleServiceController extends Controller
{
    public function index()
    {
        $singleservices = SingleService::paginate(5);
        return view('singleservice.singleservices')->withSingleservices($singleservices);
    }

    public function show($id)
    {
        $singleservice = SingleService::find($id);
        return view('singleservice.singleservice')->withSingleservice($singleservice);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'content' =>'required'
        ]);

        
        $singleservice = SingleService::find($request->input('id'));
        

        $singleservice->name = $request->get('name');
        $singleservice->title = $request->get('title');
        $singleservice->content = $request->get('content');
       
        
        $singleservice->save();
        
       

        return redirect('/singleservices')->with('success', 'Single Service  updated!');
    }
}

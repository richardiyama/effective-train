<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BreadCrump;
class BreadCrumpController extends Controller
{
    public function index()
    {
        $breadcrumps = BreadCrump::paginate(5);
        return view('breadcrump.breadcrumps')->withBreadcrumps($breadcrumps);
    }

    public function show($id)
    {
        $breadcrump = BreadCrump::find($id);
        return view('breadcrump.breadcrump')->withBreadcrump($breadcrump);
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
        
        ]);

        
        $breadcrump = BreadCrump::find($request->input('id'));
        

        $breadcrump->name = $request->get('name');
        $breadcrump->title = $request->get('title');
        
       
        
        $breadcrump->save();
        
       

        return redirect('/breadcrumps')->with('success', 'Breadcrump  updated!');
    }

}

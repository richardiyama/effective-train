<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BreadCrumbArea;
class BreadCrumbAreaController extends Controller
{
    public function index()
    {
        $breadcrumbareas = BreadCrumbArea::paginate(5);
        return view('breadcrumbarea.breadcrumbareas')->withBreadcrumbareas($breadcrumbareas);
    }

    public function show($id)
    {
        $breadcrumbarea = BreadCrumbArea::find($id);
        return view('breadcrumbarea.breadcrumbarea')->withBreadcrumbarea($breadcrumbarea);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'content' =>'required'
        ]);

        
        $breadcrumbarea = BreadCrumbArea::find($request->input('id'));
        

        $breadcrumbarea->name = $request->get('name');
        $breadcrumbarea->title = $request->get('title');
        $breadcrumbarea->content = $request->get('content');
       
        
        $breadcrumbarea->save();
        
       

        return redirect('/breadcrumbareas')->with('success', 'BreadCrumb Area  updated!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogArea;
class BlogAreaController extends Controller
{
    public function index()
    {

        $blogareas = BlogArea::paginate(5);
        return view('blogarea.blogareas')->withBlogareas($blogareas);
    }

    public function show($id)
    {
        $blogarea = BlogArea::find($id);
        return view('blogarea.blogarea')->withBlogarea($blogarea);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'content' =>'required'
        ]);

        
        $blogarea = BlogArea::find($request->input('id'));
        

        $blogarea->name = $request->get('name');
        $blogarea->title = $request->get('title');
        $blogarea->content = $request->get('content');
       
        
        $blogarea->save();
        
       

        return redirect('/blogareas')->with('success', 'Blog Area  updated!');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogarea.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'content' =>'required'
        ]);
  
        BlogArea::create($request->all());
   
        return redirect()->route('blogarea.blogareas')
                        ->with('success','Blog Area created successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogArea  $blogarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogArea $blogarea)
    {
        $blogarea->delete();
  
        return redirect()->route('blogarea.blogareas')
                        ->with('success','Blog Area deleted successfully');
    }
}

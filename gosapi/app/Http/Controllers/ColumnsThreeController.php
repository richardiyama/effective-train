<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ColumnsThree;
class ColumnsThreeController extends Controller
{
    public function index()
    {
        $columnsthrees = ColumnsThree::paginate(5);
        return view('columnsthree.columnsthrees')->withColumnsthrees($columnsthrees);
    }

    public function show($id)
    {
        $columnsthree = ColumnsThree::find($id);
        return view('columnsthree.columnsthree')->withColumnsthree($columnsthree);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title_one'   => 'required',
            'content_one'  => 'required',
            'title_two'  => 'required',
            'content_two' => 'required',
            'title_three' => 'required',
            'content_three' => 'required',
        
        ]);

        
        $columnsthree = ColumnsThree::find($request->input('id'));
        

        $columnsthree->name = $request->get('name');
        $columnsthree->content_one = $request->get('content_one');
        $columnsthree->content_two = $request->get('content_two');
        $columnsthree->content_three = $request->get('content_three');
        $columnsthree->title_one = $request->get('title_one');
        $columnsthree->title_two = $request->get('title_two');
        $columnsthree->title_three = $request->get('title_three');
       
        
        
        $columnsthree->save();
        
       

        return redirect('/columnsthrees')->with('success', 'Column Three  updated!');
    }

}

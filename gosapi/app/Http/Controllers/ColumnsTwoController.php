<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ColumnsTwo;
class ColumnsTwoController extends Controller
{
    public function index()
    {
        $columnstwos = ColumnsTwo::paginate(5);
        return view('columnstwo.columnstwos')->withColumnstwos($columnstwos);
    }

    public function show($id)
    {
        $columnstwo = ColumnsTwo::find($id);
        return view('columnstwo.columnstwo')->withColumnstwo($columnstwo);
    }

    
    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'content_one'=> 'required',
            'content_two'=> 'required'
        
        ]);

        
        $columnstwo = ColumnsTwo::find($request->input('id'));
        

        $columnstwo->name = $request->get('name');
        $columnstwo->content_one = $request->get('content_one');
        $columnstwo->content_two = $request->get('content_two');
       
        
        
        $columnstwo->save();
        
       

        return redirect('/columnstwos')->with('success', 'Column Two  updated!');
    }

}

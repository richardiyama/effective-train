<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NameItem;
class NameItemController extends Controller
{
    public function index()
    {
        $nameitems = NameItem::paginate(5);
        return view('nameitem.nameitems')->withNameitems($nameitems);
    }

    public function show($id)
    {
        $nameitem = NameItem::find($id);
        return view('nameitem.nameitem')->withNameitem($nameitem);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title_one' =>'required',
            'title_two' =>'required',
            'title_three' =>'required',
            'title_four' =>'required',
            'title_five'  => 'required',
        
        ]);

        
        $nameitem = NameItem::find($request->input('id'));
        

        $nameitem->name = $request->get('name');
        $nameitem->title_one = $request->get('title_one');
        $nameitem->title_two = $request->get('title_two');
        $nameitem->title_three = $request->get('title_three');
        $nameitem->title_four = $request->get('title_four');
        $nameitem->title_five = $request->get('title_five');
        
       
        
        $nameitem->save();
        
       

        return redirect('/nameitems')->with('success', 'Nameitem  updated!');
    }


}

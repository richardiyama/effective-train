<?php

namespace App\Http\Controllers;
use App\FindingUs;
use Illuminate\Http\Request;

class FindingUsController extends Controller
{
    public function index()
    {
        $findinguss = FindingUs::paginate();
        return view('findingus.findinguss')->withFindinguss($findinguss);
    }

    public function show($id)
    {
        $findingus = FindingUs::find($id);
        return view('findingus.findingus')->withFindingus($findingus);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'content' =>'required',
            'service_booking_url' => 'required'
        ]);

        
        $findingus = FindingUs::find($request->input('id'));
        

        $findingus->name = $request->get('name');
        $findingus->title = $request->get('title');
        $findingus->content = $request->get('content');
       
        
        $findingus->save();
        
       

        return redirect('/findinguss')->with('success', 'Finding Us  updated!');
    }
}

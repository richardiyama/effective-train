<?php

namespace App\Http\Controllers;
use App\AboutCounterArea;
use Illuminate\Http\Request;

class AboutCounterAreaController extends Controller
{
    public function index()
    {
        $aboutcounterareas = AboutCounterArea::paginate(5);
        return view('aboutcounterarea.aboutcounterareas')->withAboutcounterareas($aboutcounterareas);
        }
    public function show($id)
    {
        $aboutcounterarea = AboutCounterArea::find($id);
        return view('aboutcounterarea.aboutcounterarea')->withAboutcounterarea($aboutcounterarea);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'content' => 'required',
          
            
        ]);

        
        $aboutcounterarea = AboutCounterArea::find($request->input('id'));
        $aboutcounterarea->name = $request->get('name');

        $aboutcounterarea->content = $request->get('content');

     

        $aboutcounterarea->save();
        

        return redirect('/aboutcounterareas')->with('success', 'About Counter Area updated!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeamArea;
class TeamAreaController extends Controller
{
    public function index()
    {
        $teamareas = TeamArea::paginate(5);
        return view('teamarea.teamareas')->withTeamareas($teamareas);
    }

    public function show($id)
    {
        $teamarea = TeamArea::find($id);
        return view('teamarea.teamarea')->withTeamarea($teamarea);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'content' =>'required'
        ]);

        
        $teamarea = TeamArea::find($request->input('id'));
        

        $teamarea->name = $request->get('name');
        $teamarea->title = $request->get('title');
        $teamarea->content = $request->get('content');
       
        
        $teamarea->save();
        
       

        return redirect('/teamareas')->with('success', 'Team Area updated!');
    }
}

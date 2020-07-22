<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(5);
        return view('team.teams')->withTeams($teams);
    }

    public function show($id)
    {
        $team = Team::find($id);
        return view('team.team')->withTeam($team);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'designation' =>'required',
            'team_image' => 'required',
        ]);

        
        $team = Team::find($request->input('id'));
        
        if($request->has('team_image')) {
            $image = $request->file('team_image');
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/Team'), $filename);
             $team->team_image = $request->file('team_image')->getClientOriginalName();
         }

        $team->name = $request->get('name');
        $team->title = $request->get('title');
        $team->designation = $request->get('designation');
       
        
        $team->save();
        
       

        return redirect('/teams')->with('success', 'Team  updated!');
    }
}

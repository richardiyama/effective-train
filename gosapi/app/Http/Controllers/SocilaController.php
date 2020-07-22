<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socila;
class SocilaController extends Controller
{
    public function index()
    {
        $socilas = Socila::with(['team'])->paginate(5);
        return view('socila.socilas')->withSocilas($socilas);
    }

    public function show($id)
    {
        $socila = Socila::find($id);
        return view('socila.socila')->withSocila($socila);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'social_tag'=>'required',
            'social_url'=>'required'
        ]);

        
        $socila = Socila::find($request->input('id'));
        

        $socila->name = $request->get('name');
        $socila->social_tag = $request->get('social_tag');
        $socila->social_url = $request->get('social_url');
        
        
        $socila ->save();
        
       

        return redirect('/socilas')->with('success', 'Socila  updated!');
    }
}

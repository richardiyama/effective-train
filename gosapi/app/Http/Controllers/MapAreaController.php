<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MapArea;
class MapAreaController extends Controller
{
    public function index()
    {
        $mapareas = MapArea::paginate(5);

        return view('maparea.mapareas')->withMapareas($mapareas);
    }

    public function show($id)
    {
        $maparea = MapArea::find($id);
        return view('maparea.maparea')->withMaparea($maparea);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'map_latitude' =>'required|between:0,99.99',
            'map_longitude' =>'required|between:0,99.99'
        ]);

        
        $maparea = MapArea::find($request->input('id'));
        

        $maparea->name = $request->get('name');
        $maparea->map_latitude = $request->get('map_latitude');
        $maparea->map_longitude = $request->get('map_longitude');
       
        
        $maparea->save();
        
       

        return redirect('/mapareas')->with('success', 'Map Area  updated!');
    }
}

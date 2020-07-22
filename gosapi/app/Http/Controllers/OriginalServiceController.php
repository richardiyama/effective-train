<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OriginalService;
use App\StandardService;
use DB;
class OriginalServiceController extends Controller
{
    public function index()
    {
        $originalservices = OriginalService::with(['standardservice'])->paginate(5);
        return view('originalservice.originalservices')->withOriginalservices($originalservices);
    }

    public function show($id)
    {
        $originalservice = OriginalService::find($id);
        $standardservice = StandardService::find($originalservice->standard_service_id);
        $standardservices = StandardService::all();
        return view('originalservice.originalservice')->with([
            'standardservices' => $standardservices,
            'originalservice'  => $originalservice,
            'standardservice'  => $standardservice
           ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'description' =>'required',
            'standardservice_title'  => 'required',
        ]);

        
        $originalservice = OriginalService::find($request->input('id'));
        

        $originalservice->name = $request->get('name');
        $originalservice->title = $request->get('title');
        $originalservice->description = $request->get('description');
        $originalservice->standard_service_id = $request->get('standardservice_title');
        
        $originalservice->save();
        
       

        return redirect('/originalservices')->with('success', 'Original Service  updated!');
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $standardservices = StandardService::all();
        return view('originalservice.create')->with([
         'standardservices' => $standardservices

        ]);
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
            'description' =>'required',
            'standardservice_title'  => 'required',
        ]);

        
        $originalservice = new OriginalService();
        

        $originalservice->name = $request->get('name');
        $originalservice->title = $request->get('title');
        $originalservice->description = $request->get('description');
        $originalservice->standard_service_id = $request->get('standardservice_title');
       

       
        
        $originalservice->save();
        
       

        return redirect('/originalservices')->with('success', 'Original Service  updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OriginalService  $originalservice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        DB::delete('delete from original_services where id = ?',[$id]);
        return redirect('/originalservices')->with('success', 'Original Service  deleted!');
     }
    
}

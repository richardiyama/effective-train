<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceDone;
class ServiceDoneController extends Controller
{
    public function index()
    {

        $servicedones = ServiceDone::with(['columntwo','breadcrump','servicearea'])->paginate(5);
        return view('servicedone.servicedones')->withServicedones($servicedones);
    }

    public function show($id)
    {
        $servicedone = ServiceDone::find($id);
        return view('servicedone.servicedone')->withServicedone($servicedone);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required'   
        ]);

        
        $servicedone = ServiceDone::find($request->input('id'));
        $servicedone->name = $request->get('name');

        

     

        $servicedone->save();
        

        return redirect('/servicedones')->with('success', 'Service Done updated!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accordion;
class AccordionController extends Controller
{    
    public function index()
    {
        $accordions = Accordion::paginate(5);
        return view('accordion.accordions')->withAccordions($accordions);
    }

    public function show($id)
    {
        $accordion = Accordion::find($id);
        return view('accordion.accordion')->withAccordion($accordion);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'content_one'=> 'required',
            'content_two'=> 'required',
            'title_one'=> 'required',
            'title_two'=> 'required',
            'title_three'=> 'required',
            'title_four'=> 'required',
           'content_three'=> 'required',
            'content_four'=> 'required'
        ]);

        
        $accordion = Accordion::find($request->input('id'));
        

        $accordion->name = $request->get('name');
        $accordion->content_one = $request->get('content_one');
        $accordion->content_two = $request->get('content_two');
        $accordion->title_one = $request->get('title_one');
        $accordion->title_two = $request->get('title_two');
        $accordion->title_three = $request->get('title_three');
        $accordion->title_four = $request->get('title_four');
        $accordion->content_three = $request->get('content_three');
        $accordion->content_four = $request->get('content_four');
        
        $accordion ->save();
        
       

        return redirect('/accordions')->with('success', 'Accordion  updated!');
    }
}

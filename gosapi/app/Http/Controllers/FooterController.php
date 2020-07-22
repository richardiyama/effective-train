<?php

namespace App\Http\Controllers;
use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::with(['socials','widgets','widgettwo','widgettwo','widgetthree'])->paginate(5);
        return view('footer.footers')->withFooters($footers);
    }

    public function show($id)
    {
        $footer = Footer::find($id);
        return view('footer.footer')->withFooter($footer);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required'   
        ]);

        
        $footer = Footer::find($request->input('id'));
        $footer->name = $request->get('name');

        

     

        $footer->save();
        

        return redirect('/footers')->with('success', 'Footer updated!');
    }
}

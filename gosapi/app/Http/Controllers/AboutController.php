<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\InnerAbout;
use App\AboutCounterArea;
use App\BreadCrump;
use App\ColumnsThree;
use App\ColumnsTwo;
use App\AboutOne;
use App\FindingUs;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::with(['innerabout','columnthree','columntwo','aboutone','breadcrump','aboutcounterarea'])->paginate(5);
        return view('about.abouts')->withAbouts($abouts);
    }

    public function show($id)
    {
        $about = About::find($id);
        return view('about.about')->withAbout($about);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required'
            //'titleone'  => 'required',
            //'description' => 'required',
            //'content_one' => 'required',
           // 'content_two'  => 'required',
           // 'title_one'  => 'required',
            //'contentone_one'  => 'required',
           // 'titletwo_two' => 'required',
           // 'contenttwo_two' => 'required',
           // 'title_three' => 'required',
           // 'content_three' => 'required',
           // 'titletwo'  => 'required',
           // 'content'  => 'required',
           // 'service_booking_url' => 'required',
           // 'titlethree' => 'required',
           // 'contentone' => 'required',
           // 'image' => 'required|mimes:jpeg,png,bmp,tiff |max:4096',
           // 'titlefour' => 'required',
            //'contenttwo' => 'required'
            
        ]);

        
        $about = About::find($request->input('id'));
        //$innerabout = new InnerAbout;
       // $columntwo = new ColumnsTwo;
        //$columnthree = new ColumnsThree;
       // $findingus = new FindingUs;
        //$breadcrump = new BreadCrump;
        //$aboutcounterarea = new AboutCounterArea;
        //$aboutone = new AboutOne;
       // $innerabout->title = $request->get('titleone');
       // $innerabout->description = $request->get('description');
        //$columntwo->content_one = $request->get('content_one');
        //$columntwo->content_two = $request->get('content_two' );
       // $columnthree->title_one = $request->get('title_one');
       // $columnthree->content_one = $request->get('contentone_one' );
       // $columnthree->title_two = $request->get('titletwo_two');
       // $columnthree->content_two = $request->get('contenttwo_two' );
        //$columnthree->title_three = $request->get('title_three');
       // $columnthree->content_three = $request->get('content_three');
       // $findingus->title = $request->get('titletwo' );
       // $findingus->content = $request->get('content');
        //$findingus->service_booking_url = $request->get('service_booking_url');
       // $breadcrump->title = $request->get('titlethree');
        //$aboutcounterarea->content = $request->get('contentone');

       // if($request->has('image')) {
         //   $image = $request->file('image');
            
           // $filename = $image->getClientOriginalName();
           // $image->move(public_path('images/abouts'), $filename);
           // $aboutone->about_image = $request->file('image')->getClientOriginalName();
       // }


        
        //$aboutone->title = $request->get('titlefour');
       // $aboutone->content = $request->get('contenttwo');
        $about->name =  $request->get('name');
        $about->title = $request->get('title');
        $about->save();
        //$about->innerabout()->save($innerabout);
        //$about->columntwo()->save($columntwo);
        //$about->columnthree()->save($columnthree);
        //$about->findingus()->save($findingus);
      // $about->breadcrump()->save($breadcrump);
       // $about->aboutcounterarea()->save($aboutcounterarea);
        //$about->aboutone()->save($aboutone);
       

        return redirect('/abouts')->with('success', 'About updated!');
    }

    
}

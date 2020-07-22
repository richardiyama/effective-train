<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::with(['homess'])->paginate(5);
        return view('slider.sliders')->withSliders($sliders);
    }

    public function show($id)
    {
        $slider = Slider::find($id);

        return view('slider.slider')->withSlider($slider);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'text_position'=>'required',
            'bg_Image'=>'required',
            'category'=>'required',
            'description'=>'required',
            'button_text'=>'required',
            'button_link'=>'required'
        ]);

        
        $slider = Slider::find($request->input('id'));
        

        $slider->name = $request->get('name');
        $slider->text_position = $request->get('text_position');
        $slider->bg_Image = $request->get('bg_Image');
        $slider->description = $request->get('description');
        $slider->category = $request->get('category');
        $slider->button_text = $request->get('button_text');
        $slider->button_link = $request->get('button_link');
       
        
        $slider ->save();
        
       

        return redirect('/sliders')->with('success', 'Slider  updated!');
    }
}

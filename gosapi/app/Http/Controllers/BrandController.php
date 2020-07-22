<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
class BrandController extends Controller
{
    public function index()
    {

        $brands = Brand::paginate(5);
        return view('brand.brands')->withBrands($brands);
    }

    public function show($id)
    {
        $brand = Brand::find($id);
        return view('brand.brand')->withbrand($brand);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'brand_image' => 'required|mimes:jpeg,png,bmp,tiff |max:4096'
        ]);

        
        $brand = Brand::find($request->input('id'));
        
        if($request->has('brand_image')) {
            $image = $request->file('brand_image');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/brand'), $filename);
             $brand->brand_image = $request->file('brand_image')->getClientOriginalName();
         }

        $brand->name = $request->get('name');
        
       
        
        $brand->save();
        
       

        return redirect('/brands')->with('success', 'Brand  updated!');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.create');
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
            'brand_image' => 'required|mimes:jpeg,png,bmp,tiff |max:4096'
        ]);
  
        $brand = new Brand();
        
        if($request->has('brand_image')) {
            $image = $request->file('brand_image');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/brand'), $filename);
             $brand->brand_image = $request->file('brand_image')->getClientOriginalName();
         }

        $brand->name = $request->get('name');
        
       
        
        $brand->save();
        
       

        return redirect('/brands')->with('success', 'Brand  updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
  
        return redirect()->route('brand.brands')
                        ->with('success','Brand deleted successfully');
    }
}

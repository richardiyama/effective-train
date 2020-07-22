<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseFile;
class CourseFileController extends Controller
{
    public function index()
    {

        $coursefiles = CourseFile::paginate(5);
        return view('coursefile.coursefiles')->withCoursefiles($coursefiles);
    }

    public function show($id)
    {
        $coursefile = CourseFile::find($id);
        return view('coursefile.coursefile')->withCoursefile($coursefile);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'course_file_image' => 'required|mimes:pdf |max:4096'
        ]);

        
        $coursefile = CourseFile::find($request->input('id'));
        
        if($request->has('course_file_image')) {
            $image = $request->file('course_file_image');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/course'), $filename);
             $coursefile->course_file_image = $request->file('course_file_image')->getClientOriginalName();
         }

        $coursefile->name = $request->get('name');
        
       
        
        $coursefile->save();
        
       

        return redirect('/coursefiles')->with('success', 'Course File  updated!');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coursefile.create');
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
            'course_file_image' => 'required|mimes:pdf|max:4096'
        ]);
  
        $coursefile = new CourseFile();
        
        if($request->has('course_file_image')) {
            $image = $request->file('course_file_image');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/course'), $filename);
             $coursefile->course_file_image = $request->file('course_file_image')->getClientOriginalName();
         }

        $coursefile->name = $request->get('name');
        
       
        
        $coursefile->save();
        
       

        return redirect('/coursefiles')->with('success', 'Course File  updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coursefile  $coursefile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coursefile $coursefile)
    {
        $coursefile->delete();
  
        return redirect()->route('coursefile.coursefiles')
                        ->with('success','Course File deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CourseFile;
use App\Http\Resources\CourseFileResource;
class CourseFileApiController extends Controller
{
    public function index(){
        return  CourseFileResource::collection(CourseFile::all());
        }
}

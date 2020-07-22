<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Http\Resources\SliderResource;
class SliderApiController extends Controller
{
    public function index(){
        return  SliderResource::collection(Slider::all());
        }
}

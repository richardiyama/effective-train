<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use App\Http\Resources\BrandResource;
class BrandApiController extends Controller
{
    public function index(){
        return  BrandResource::collection(Brand::all());
        }
}

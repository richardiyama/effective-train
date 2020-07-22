<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AboutTwo;
use App\Http\Resources\AboutTwoResource;
class AboutTwoApiController extends Controller
{
    public function index(){
        return  AboutTwoResource::collection(AboutTwo::with(['nameitemone','nameitemtwo'])->paginate(5));
        }
}

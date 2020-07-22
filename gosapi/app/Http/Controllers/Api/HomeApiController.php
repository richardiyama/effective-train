<?php

namespace App\Http\Controllers\Api;
use App\Home;
use App\Http\Resources\HomeResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeApiController extends Controller
{
    public function index()
    {
    return HomeResource::collection(Home::with(['aboutone','singleservice','abouttwo','counteruparea'])->paginate(5));
    }
}

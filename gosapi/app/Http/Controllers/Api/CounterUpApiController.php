<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CounterUp;
use App\Http\Resources\CounterUpResource;
class CounterUpApiController extends Controller
{
    public function index(){
        return  CounterUpResource::collection(CounterUp::paginate(5));
        }
}

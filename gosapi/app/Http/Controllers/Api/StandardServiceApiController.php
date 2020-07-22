<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StandardService;
use App\Http\Resources\StandardServiceResource;

class StandardServiceApiController extends Controller
{
    public function index(){
        return  StandardServiceResource::collection(StandardService::with(['homess','servicedone','columntwo'])->paginate(10));
        }

        public function show($id)
        {
           
            return new StandardServiceResource(StandardService::find($id));
        }
    
}

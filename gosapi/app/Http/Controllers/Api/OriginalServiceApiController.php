<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OriginalService;
use App\Http\Resources\OriginalServiceResource;
class OriginalServiceApiController extends Controller
{
    public function index(){
        return  OriginalServiceResource::collection(OriginalService::with(['standardservice','servicedetail'])->paginate(5));
        }

        public function show($id)
        {
           
            return new OriginalServiceResource(OriginalService::find($id));
        }
    
}

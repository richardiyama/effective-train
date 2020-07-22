<?php

namespace App\Http\Controllers\Api;
use App\ColumnsTwo;
use App\Http\Resources\ColumnsTwoResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColumnsTwoApiController extends Controller
{
    public function index(){
        return  ColumnsTwoResource::collection(ColumnsTwo::paginate(5));
        }

        public function show($id)
        {
           
            return new ColumnsTwoResource(ColumnsTwo::find($id));
        }
}

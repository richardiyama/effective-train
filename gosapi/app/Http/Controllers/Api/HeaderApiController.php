<?php

namespace App\Http\Controllers\Api;
use App\Header;
use App\Http\Resources\HeaderResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderApiController extends Controller
{
    public function index(){
        return  HeaderResource::collection(Header::paginate(5));
        }
}

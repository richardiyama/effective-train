<?php

namespace App\Http\Controllers\Api;
use App\NameItem;
use App\Http\Resources\NameItemResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NameItemApiController extends Controller
{
    public function index()
    {
    return  NameItemResource::collection(NameItem::paginate(5));
    }
}

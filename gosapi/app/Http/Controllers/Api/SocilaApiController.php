<?php

namespace App\Http\Controllers\Api;
use App\Socila;
use App\Http\Resources\SocilaResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocilaApiController extends Controller
{
    public function index()
    {
      return  SocilaResource::collection(Socila::with(['team'])->paginate(5));
    }
}

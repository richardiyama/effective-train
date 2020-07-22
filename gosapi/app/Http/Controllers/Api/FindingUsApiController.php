<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FindingUs;
use App\Http\Resources\FindingUsResource;
class FindingUsApiController extends Controller
{
    public function index()
    {
    return  FindingUsResource::collection(FindingUs::all());
    }
}

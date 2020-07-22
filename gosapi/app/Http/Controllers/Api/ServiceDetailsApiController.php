<?php

namespace App\Http\Controllers\Api;
use App\ServiceDetails;
use App\Http\Resources\ServiceDetailsResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceDetailsApiController extends Controller
{
    public function index()
    {
    return  ServiceDetailsResource::collection(ServiceDetails::paginate(5));
    }
}

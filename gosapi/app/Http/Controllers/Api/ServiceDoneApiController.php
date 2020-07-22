<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ServiceDone;
use App\Http\Resources\ServiceDoneResource;
class ServiceDoneApiController extends Controller
{
    public function index(){
        return  ServiceDoneResource::collection(ServiceDone::with(['columntwo','breadcrump','servicearea'])->paginate(5));
        }
}

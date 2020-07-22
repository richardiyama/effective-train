<?php

namespace App\Http\Controllers\Api;
use App\About;
use App\Http\Resources\AboutResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutApiController extends Controller
{
    public function index()
    {
      return  AboutResource::collection(About::with(['innerabout','columnthree','columntwo','aboutone','breadcrump','aboutcounterarea'])->paginate(5));
    }

}

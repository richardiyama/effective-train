<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TeamArea;
use App\Http\Resources\TeamAreaResource;
class TeamAreaApiController extends Controller
{
    public function index(){
        return  TeamAreaResource::collection(TeamArea::paginate(5));
        }
}

<?php

namespace App\Http\Controllers\Api;
use App\Team;
use App\Http\Resources\TeamResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamApiController extends Controller
{
    public function index(){
        return  TeamResource::collection(Team::with(['socials'])->paginate(5));
        }
}

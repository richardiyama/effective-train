<?php

namespace App\Http\Controllers\Api;
use App\Footer;
use App\Http\Resources\FooterResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterApiController extends Controller
{
    public function index(){
        return  FooterResource::collection(Footer::with(['socials','widgets','widgettwo','widgettwo','widgetthree'])->paginate(5));
        }
}

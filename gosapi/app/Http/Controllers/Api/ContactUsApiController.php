<?php

namespace App\Http\Controllers\Api;
use App\ContactUs;
use App\Http\Resources\ContactUsResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsApiController extends Controller
{
    public function index(){
        return  ContactUsResource::collection(ContactUs::with(['contacttoparea','breadcrumbarea','maparea'])->paginate(5));
        }
}

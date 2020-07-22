<?php

namespace App\Http\Controllers\Api;
use App\Accordion;
use App\Http\Resources\AccordionResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccordionApiController extends Controller
{
    public function index(){
    return  AccordionResource::collection(Accordion::paginate(5));
    }
}

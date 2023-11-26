<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function service(){
        $services=Service::all();
        return view('frontend.pages.service',compact('services'));
    }
    public function singleServiceview($id){
        $services=Service::find($id);
        return view('frontend.pages.singleService',compact('services'));
    }    
}

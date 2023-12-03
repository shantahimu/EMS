<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.pages.home');
    }

    public function search(Request $request){
        if ($request->search){
            $services=Service::where('services','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $services=Service::all();
        }
        return view('frontend.pages.search',compact('services'));
    }
}

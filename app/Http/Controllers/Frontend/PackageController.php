<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function singleview($id){
        $singleevent =Event::find($id);
        // dd($events);

        return view('frontend.pages.singleEvent',compact('singleevent'));
    }    
    
}

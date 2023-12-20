<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function singleview($id){
        $singleevent =Event::with('services')->find($id);
        $services=Service::all();
        //dd($singleevent);

        return view('frontend.pages.singleEvent',compact('singleevent'));
    }    

    public function search(Request $request){
        // dd($request);
        if ($request->search){
            $singleevent=Event::where('event_name','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $singleevent=Event::all();
        }
        return view('frontend.pages.search',compact('singleevent'));
    }
    
}

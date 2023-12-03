<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function event()
    {
        $events=Event::all();
        return view('frontend.pages.event',compact('events'));
    }
    public function singleEventview($id){
        $events=Event::find($id);
        return view('frontend.pages.singleEvent',compact('events'));
    }    
}


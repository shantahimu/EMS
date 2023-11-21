<?php

namespace App\Http\Controllers\Backend;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Event as ModelsEvent;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function list(){
        $events = Event::all();
        return view('admin.pages.event.list', compact('events'));
    }
    public function createform(){
        return view('admin.pages.event.form');
    }
    public function store(Request $request){
        // dd($request->all());
        $validate=Validator::make($request->all(),[
            'event_name'=>'required',
            'status'=>'required',

        ]); 
        if($validate->fails())
      {

        // notify()->error($validate->getMessageBag());
        // return redirect()->back();

        return redirect()->back()->withErrors($validate);
      }
        Event::create([
            'event_name'=>$request->event_name,
            'event_description'=>$request->event_description,
            'status'=>$request->status,
        

        ]);
        notify()->success('Submitted Successfully');
        return redirect()->route ('event.list');
       }
}

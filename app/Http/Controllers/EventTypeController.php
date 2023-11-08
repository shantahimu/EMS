<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class EventTypeController extends Controller
{
    public function list(){
        $event_types = EventType::paginate(5);
        return view('admin.pages.eventtype.list', compact('event_types'));
    }
    public function create(){
        return view('admin.pages.eventtype.create');
    }
    public function store(Request $request){
        //dd($request->all());
        $validate=Validator::make($request->all(),[
            'event_name'=>'required',
            'event_date'=>'required',
            'status'=>'required',
            'action'=>'required'

        ]); 
        if($validate->fails())
      {

        // notify()->error($validate->getMessageBag());
        // return redirect()->back();

        return redirect()->back()->withErrors($validate);
      }
        EventType::create([
            'event_name'=>$request->event_name,
            'event_date'=>$request->event_date,
            'event_description'=>$request->event_description,
            'status'=>$request->status,
            'action'=>$request->action,
        

        ]);
        notify()->success('Submitted Successfully');
        return redirect()->route ('eventtype.list');
       }
}

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
        $events = Event::paginate(5);
        return view('admin.pages.event.list', compact('events'));
    }

    public function delete($id)
    {
        // dd('hi');
        $events = Event::find($id);
        if ($events) {
            $events->delete();
        }

        notify()->success('Event Deleted Successfully.');
        return redirect()->back();
    }
    public function view($id){
        $events = Event::find($id);
        return view('admin.pages.event.view',compact('events'));
    }


    public function edit($id)
    {
        $events = Event::find($id);
        return view('admin.pages.event.edit', compact('events'));
    }


    public function update(Request $request, $id)
    {
        $events = Event::find($id);
        if ($events) {
            $fileName = $events->event_image;
            if ($request->hasFile('event_image')) {
                $file = $request->file('event_image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();

                $file->storeAs('/', $fileName);
            }
            $events->update([
                'event_name'=>$request->event_name,
                'event_description'=>$request->event_description,
                'event_price'=>$request->event_price,
                'event_image' => $fileName,

            ]);

            notify()->success('Event updated successfully.');
            return redirect()->route('event.list');
        }
        
        
    }

    public function createform(){
        return view('admin.pages.event.form');
    }
    public function store(Request $request){
        // dd($request);
        $validate=Validator::make($request->all(),[
            'event_name'=>'required',
            'event_price'=>'required'

        ]); 
        if ($validate->fails()) {

            return redirect()->back()->with('myError', $validate->getMessageBag());
        }

        $fileName=null;
         
        if($request->hasFile('event_image'))
        {
            $file=$request->file('event_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/',$fileName);

        }
        
        if($validate->fails())
      {
        notify()->error($validate->getMessageBag());
        return redirect()->back()->withErrors($validate);
      }
        Event::create([
            'event_name'=>$request->event_name,
            'event_description'=>$request->event_description,
            'event_price'=>$request->event_price,
            'event_image' => $fileName,
        

        ]);
        notify()->success('Submitted Successfully');
        return redirect()->route ('event.list');
       }
}

<?php

namespace App\Http\Controllers\Backend;

use notify;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function  list(){
        $bookings=Booking::paginate(5);
        return view('admin.pages.booking.list', compact('bookings'));
    }
    public function createform(){
        return view('admin.pages.booking.form');
    }
    public function store(Request $request){
        // return redirect()->route ('booking.list');
        //dd($request);
        $validate=Validator::make($request->all(),[
            'event_date'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'total_amount'=>'required',
        ]);
        if($validate->fails())
        {
  
          // notify()->error($validate->getMessageBag());
          // return redirect()->back();
  
          return redirect()->back()->withErrors($validate);
        }
        Booking::create([
            'event_day'=>$request->event_date,
            'event_starts'=>$request->start_time,
            'event_ends'=>$request->end_time,
            'amount' => $request->total_amount,
        ]);
        notify()->success('Submitted Successfully');
        return redirect()->route ('booking.list');
    }
}

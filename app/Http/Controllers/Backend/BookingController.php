<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Booking_Detail;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list()
    {
        // dd('hcjsv');
        $bookings = Booking::with('event')->get();
        // dd($bookings);
        return view('admin.pages.booking.list', compact('bookings'));
    }
    
    public function createform(){
        return view('admin.pages.event.form');
    }
    public function details(){
        $booking_details=Booking_Detail::with('service')->get();
        return view('admin.pages.booking.details',compact('booking_details'));
    }
    public function update($id)
    {
        $booking = Booking::find($id);
        return view('admin.pages.booking.update', compact('booking'));

    }

    public function priceupdated(Request $request,$id){
        $booking =Booking::find($id);
        // dd($booking);
        $booking->update([
            'price'=>$request->price,
            'status'=>'processing',
        ]);
        return redirect()->route('booking.list');
    }
    
    

}

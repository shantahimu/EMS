<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class BookingController extends Controller
{


    public function book(Request $request)
    {
        //   dd($request);
        Booking::create([
            'user_id' => auth()->user()->id,
            'event_id' => $request->event_name,
            'guest' => $request->guest,
            'location' => $request->location,
            'remarks' => $request->remarks,
            'status' => 'pending'

        ]);
        return redirect()->route('profile.view');
    }

    public function book_confirm(Request $request, $id)
    {
        $booking=Booking::find($id);
        // dd($booking);
        $booking->update([
            'status'=>'Confirm',
        ]);

        return redirect()->route('profile.view');
    }

    public function book_cancel(Request $request, $id)
    {
        $booking=Booking::find($id);
        // dd($booking);
        $booking->update([
            'status'=>'Cancel',
        ]);

        return redirect()->route('profile.view');
    }
}

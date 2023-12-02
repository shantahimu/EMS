<?php
namespace App\Http\Controllers\Frontend;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
   public function bookNow($serviceId){
       Booking::create([
            'user_id'=>auth()->user()->id,
           'service_id'=>$serviceId,
       ]);
        
        notify()->success('Booking has been placed');
        return redirect()->route('profile.view');
    }
 
     public function cancelBooking($serviceId)
     {
 
         $booking=Booking::find($serviceId);
         if($booking)
         {
             $booking->update([
                 'status'=>'cancelled'
             ]);
         }
 
         notify()->success('Booking Cancelled');
        return redirect()->back();
         
     }
     public function startbooking($event_id){
        dd($event_id);
        Booking::create([
            'user_id'=>auth()->user()->id,
            'event_id'=>$event_id,
        ]);
        
        notify()->success('Booking has been placed');
        return redirect()->route('profile.view');
 
     }
 
     public function bookcancel($event_id)
     {
 
         $booking=Booking::find($event_id);
         if($booking)
         {
             $booking->update([
                 'status'=>'cancelled'
             ]);
         }
 
         notify()->success('Booking Cancelled');
        return redirect()->back();
         
     }
}

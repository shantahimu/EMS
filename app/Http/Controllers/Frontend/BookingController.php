<?php
namespace App\Http\Controllers\Frontend;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{

   public function bookNow( $serviceId){
// dd($request->all());
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
   
 
   
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Booking_Detail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Library\SslCommerz\SslCommerzNotification;

class BookingController extends Controller
{
    public function book(Request $request)
    { {
            $validator = Validator::make($request->all(), [
                'event_name' => 'required',
                'guest' => 'required|numeric',
                'apponitment_date' => 'required|date',
                'start_date' => 'required|date',
                'end_date' => 'required|date',
                'location' => 'required|string',
                'remarks' => 'required|string',

            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            // dd($request);
            $booking = Booking::create([
                'user_id' => auth()->user()->id,
                'event_id' => $request->event_name,
                'guest' => $request->guest,
                'appointment_date' => $request->apponitment_date,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'location' => $request->location,
                'remarks' => $request->remarks,
                'status' => 'pending',
                'transaction_id' => date('YmdHis'),
                'payment_status' => 'pending'


            ]);
            $service = $request->services;
            // dd($service);
            foreach ($service as $item)
                // dd($item);
                Booking_Detail::create([
                    'booking_id' => $booking->id,
                    'service_id' => $item,
                    'event_id' => $request->event_name,
                ]);
                notify()->success('Event booked successfully.');
            return redirect()->route('user.profile.view');
        }
    }
    public function book_confirm(Request $request, $id)
    {
        $booking = Booking::find($id);
        //  dd($booking);

        $this->payment($booking);
        

        return redirect()->route('user.profile.view');
    }


    public function payment($payment)
    {
        //  dd($payment);
        $post_data = array();
        $post_data['total_amount'] = (int)$payment->price; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $payment->transaction_id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $payment->user_id;
        $post_data['cus_email'] = 'a@gmail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        //                                                                                                                               dd($post_data);


        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');
        //dd($payment_options);
        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }


    public function book_cancel(Request $request, $id)
    {
        $booking = Booking::find($id);
        // dd($booking);
        $booking->update([
            'status' => 'Cancel',
        ]);
        notify()->error('Event Booking cancelled');

        return redirect()->route('user.profile.view');
    }
}

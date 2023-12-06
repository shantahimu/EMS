<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfirmBookingController extends Controller
{
    public function bookconfirm(){
        // dd('confirm your booking');
        return view('frontend.pages.confirm-booking');
    }
}

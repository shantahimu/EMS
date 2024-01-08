<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function  dashboard(){
        
        $customersCount = User::where('role', 'customer')->count();
        $bookings = Booking::count();
        return view('admin.pages.dashboard.dashboard', compact('customersCount' , 'bookings'));
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookingController extends Controller
{
    public function  list(){
        return view('admin.pages.booking.list');
    }
    public function create(){
        return view('admin.pages.booking.create');
    }
    public function store(Request $request){
        // return redirect()->route ('booking.list');
        dd($request);
    }
}

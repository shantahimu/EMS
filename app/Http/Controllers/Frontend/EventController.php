<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Book Event Page
    public function event()
    {
        return view('frontend.pages.event');
    }
}


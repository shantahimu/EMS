<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function  dashboard(){
        // dd('Hello Dashboard');
        return view('admin.pages.dashboard.dashboard');
    }
    
}

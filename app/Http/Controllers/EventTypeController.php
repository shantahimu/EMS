<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EventTypeController extends Controller
{
    public function list(){
        return view('admin.pages.eventtype.list');
    }
    public function create(){
        return view('admin.pages.eventtype.create');
    }
}

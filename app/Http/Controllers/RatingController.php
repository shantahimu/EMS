<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RatingController extends Controller
{
    public function list(){
        return view('admin.pages.rating.list');
    }

}

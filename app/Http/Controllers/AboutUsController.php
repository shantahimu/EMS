<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutUsController extends Controller
{
    public function list (){
        return view('admin.pages.aboutus.list');

    }
}

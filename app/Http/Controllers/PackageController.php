<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PackageController extends Controller
{
    public function list(){
        return view('admin.pages.package.list');
    }
    public function create(){
        return view('admin.pages.package.create');
    }
}

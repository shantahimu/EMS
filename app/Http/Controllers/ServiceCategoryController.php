<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ServiceCategoryController extends Controller
{
    public function list(){
        return view('admin.pages.servicecategory.list');
    }
    public function create(){
        return view('admin.pages.servicecategory.create');
    }
}

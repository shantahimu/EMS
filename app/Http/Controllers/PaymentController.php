<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PaymentController extends Controller
{
    public function list(){
        return view('admin.pages.payment.list');
    }
    public function create(){
        return view('admin.pages.payment.create');
    }
}

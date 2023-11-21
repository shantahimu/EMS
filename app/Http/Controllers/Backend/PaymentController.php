<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PaymentController extends Controller
{
    public function list(){
        return view('admin.pages.payment.list');
    }
    public function createform(){
        return view('admin.pages.payment.form');
    }
}

<?php
namespace App\Http\Controllers\Backend;

use notify;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
        public function list() {
           
            $customer = User::where('role','customer')->get();
            return view('admin.pages.customer.list', compact('customer'));
        }
        
    // public function createform(){
    //     return view('admin.pages.customer.form');
    // }
    // public function store(Request $request){
    //     //dd($request->all());
    //     $validate=Validator::make($request->all(),[
    //         'name'=>'required',
    //         'gmail'=>'required',
           
    //     ]); 
    //     if($validate->fails())
        
    //   {
    //     return redirect()->back()->withErrors($validate);
    //   }
    //     Customer::create([
    //         'name'=>$request->name,
    //         'gmail'=>$request->gmail

    //     ]);
    //     notify()->success('Submitted Successfully');
    //     return redirect()->route ('customer.list');
    //    }
}


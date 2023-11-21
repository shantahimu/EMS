<?php
namespace App\Http\Controllers\Backend;

use notify;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
        public function list() {
            $customers = Customer::paginate(5);
            return view('admin.pages.customer.list', compact('customers'));
        }
        
    public function createform(){
        return view('admin.pages.customer.form');
    }
    public function store(Request $request){
        //dd($request->all());
        $validate=Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'gmail'=>'required',
            'contact_no'=>'required',
            'address'=>'required',

        ]); 
        if($validate->fails())
      {

        // notify()->error($validate->getMessageBag());
        // return redirect()->back();

        return redirect()->back()->withErrors($validate);
      }
        Customer::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'gmail'=>$request->gmail,
            'contact_no'=>$request->contact_no,
            'address'=>$request->address,
            'city'=>$request->city,

        ]);
        notify()->success('Submitted Successfully');
        return redirect()->route ('customer.list');
       }
}


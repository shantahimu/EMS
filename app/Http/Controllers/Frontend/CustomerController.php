<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    
    public function registration()
    {
        return view('frontend.pages.registration');
    }

    public function profile(){
        $booking=Booking::with('event')->where('user_id',auth()->user()->id)->get();
        return view('frontend.pages.profile', compact('booking'));
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('frontend.pages.profileedit', compact('users'));
    }
    public function update(Request $request,$id){
        $users=User::find($id);
        
        $users->update([
            'name'=>$request->name,
            'email'=>$request->email            
        ]);
        return redirect()->back();
    }

    public function registrationstore(Request $request)
    {
        // dd($request->all());
        $validate =Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]); 

        if($validate->fails()){
            notify()->error('Invalid User & Password');
            return redirect()->back();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'customer',
            'password' => bcrypt($request->password),
        ]);

        notify()->success('Customer Registration successful. Please login.');
        return redirect()->route('login'); 
    }

    
    public function login()
    {
       return view('frontend.pages.login');
        // dd('sop');
    }

    
    public function dologin(Request $request)
    {
        // dd("hi");
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            notify()->error($validator->errors()->first());
            return redirect()->back()->withInput();
        }

        $credentials = $request->only('email', 'password');
        // dd($credentials);

        if (auth()->attempt($credentials)) {
            notify()->success('Login Success.');
            return redirect()->route('frontendhome');
        }

        notify()->error('Invalid Credentials.');
        return redirect()->back();
    }

    
    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Success.');    
        return redirect()->route('frontendhome');
    }
}

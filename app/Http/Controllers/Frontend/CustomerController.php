<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    
    public function registration()
    {
        return view('frontend.pages.registration');
    }

    public function profile(){
        return view('frontend.pages.profile');
    }




    public function registrationstore(Request $request)
    {
        // dd($request->all());
        $validate =Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:6',
        ]); 

        if($validate->fails()){
            notify()->error($validate->errors()->first());
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

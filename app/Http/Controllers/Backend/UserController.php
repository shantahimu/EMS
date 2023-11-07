<?php

namespace App\Http\Controllers\Backend;

use notify;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller 
{
    public function loginForm(){
        return view('admin.pages.login');
    }
    public function loginPost(Request $request)
    {
         //dd($request->all());
            $validate=Validator::make($request->all(),
            [
               'email'=>'required|email',
               'password'=>'required|min:6',
            ]);

             if($validate->fails())
             {
              // message
         return redirect()->back()->withErrors($validate); 
         }

            $credentials=$request->except('_token');
            // $credentials=$request->only('email','password');

            // if(auth()->attempt($credentials))

            $login=auth()->attempt($credentials);
            if($login)
            {
               return redirect()->route('dashboard');
            }
            notify()->success('Logged in sucessfully');
           return redirect()->back()->with('message', 'Invalid user email or password');
    }
    public function logout()
    {

        auth()->logout();
         notify()->success('Logged out sucessfully');
        return redirect()->route('admin.login');    
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactusController extends Controller
{
    public function contact(){

        return view('frontend.pages.contactus');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        Contact::create([
            'user_id'=>auth()->user()->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
           ]);
        notify()->success('Message recieved. You will get a mail soon!');
        return redirect()->route('frontendhome');
    }
}

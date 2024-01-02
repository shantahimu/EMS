<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        $contacts=Contact::all();
        return view('admin.pages.contact.contactus',compact('contacts'));
    }
}

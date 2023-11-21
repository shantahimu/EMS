<?php

namespace App\Http\Controllers\Backend;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function list(){
        $packages=Package::paginate (5);
        return view('admin.pages.package.list', compact('packages'));
    }
    public function createform(){
        return view('admin.pages.package.form');
    }
    public function store(Request $request){
        $validate=Validator::make($request->all(),[
            'package_name'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]); 
        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate);
        }
        Package::create([
            'name'=>$request->package_name,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        notify()->success('Submitted Successfully');
        return redirect()->route ('package.list');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class ServiceCategoryController extends Controller
{
    public function list(){
        $service_categories = ServiceCategory::paginate(5);
        return view('admin.pages.servicecategory.list', compact('service_categories'));
    }
    public function form (){
        return view('admin.pages.servicecategory.form');
    }
    public function store(Request $request){
        //dd($request->all());
        $validate=Validator::make($request->all(),[
            'service_category_name'=>'required',

        ]); 
        if($validate->fails())
      {

        // notify()->error($validate->getMessageBag());
        // return redirect()->back();

        return redirect()->back()->withErrors($validate);
      }
        ServiceCategory::create([
            'services'=>$request->service_category_name,
            'description'=>$request->description,
            'images'=>$request->image,

        ]);
        notify()->success('Submitted Successfully');
        return redirect()->route ('servicecategory.list');
       }
}

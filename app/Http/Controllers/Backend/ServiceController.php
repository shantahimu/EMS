<?php

namespace App\Http\Controllers\Backend;

use services;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function list()
    {
        $services = Service::paginate(5);
        return view('admin.pages.service.list', compact('services'));
    }

    public function delete($id)
    {
        // dd('hi');
        $services = Service::find($id);
        if ($services) {
            $services->delete();
        }

        notify()->success('Service Deleted Successfully.');
        return redirect()->back();
    }
    public function view($id){
        $services = Service::find($id);
        return view('admin.pages.service.view',compact('services'));
    }


    public function edit($id)
    {
        $services = Service::find($id);
        return view('admin.pages.service.edit', compact('services'));
    }


    public function update(Request $request, $id)
    {
        $services = Service::find($id);
        if ($services) {
            $fileName = $services->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();

                $file->storeAs('/', $fileName);
            }
            $services->update([
                'services' => $request->service_name,
                'description' => $request->description,
                'service_price' => $request->service_price,
                'images' => $fileName,

            ]);

            notify()->success('Service updated successfully.');
            return redirect()->route('service.list');
        }
        
        
    }
    
    public function form()
    {
        return view('admin.pages.service.form');
    }
    
    
    
    public function store(Request $request)
    {

        //dd($request);
        $validate = Validator::make($request->all(), [
            'service_name' => 'required',

        ]);
        if ($validate->fails()) {

            return redirect()->back()->with('myError', $validate->getMessageBag());
        }

        $fileName=null;
        // dd($request->all());
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/',$fileName);

        }

        Service::create([
            'services' => $request->service_name,
            'description' => $request->description,
            'service_price' => $request->service_price,
            'images' => $fileName,

        ]);

        return redirect()->route('service.list')->with('message', 'Service created successfully.');

        
    }
    
}

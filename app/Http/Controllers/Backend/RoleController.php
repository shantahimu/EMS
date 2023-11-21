<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RoleController extends Controller
{
    public function role(){
        return view('admin.pages.role.list');
    }
    public function form(){
        return view('admin.pages.role.form');
    }
}

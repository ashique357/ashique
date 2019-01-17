<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Marriage;
use App\Approved;

class SuperAdminController extends Controller
{
  public function __construct(){
    $this->middleware('auth:SuperAdmin');
  }

  public function index(){
    return view('SuperAdmin');
  }

  public function info_view(){
    $admins=Admin::with('marriage')->get();
    return view('superadmin.superAdmin_marriage_admin_info')->with('admins',$admins);

  }
  public function admin_marriage($id){

    $marriage_admin_id=Marriage::where('admin_id','=',$id)->get();
    return view('superadmin.superAdmin_marriage_list',compact('marriage_admin_id',$marriage_admin_id));
  }

  public function marriage_display_info($id){
    $information=Approved::find($id);
    return view('superadmin.SuperAdmin_Marriage_info',compact('information',$information));
  }

}

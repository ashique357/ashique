<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Marriage;
use App\Admin;
use App\Approved;

class AdminPageController extends Controller
{
  public function __construct(){
   $this->middleware('auth:admin');
  }
    public function index(){
      $get_id=Auth::id();
      $marriage_admin_id=Marriage::where('admin_id','=',$get_id)->get();
      return view('admin.marriage_list',compact('marriage_admin_id',$marriage_admin_id));
  }

    public function display_info($id){
      $information=Marriage::find($id);
      //$key = bcrypt(microtime().rand());
      return view('admin.marriage_info')->with('information',$information);
                                        //->with('key',$key);
    }

    public function get_action(Request $request){
        if ($request->has('accept')) {
          $approved_data=$request->all();
          $get_approved=Approved::create($approved_data);
          return redirect()->route('list')->with('success', ['Successfully Marriage Registration Completed']);
        }
        elseif ($request->has('decline')) {
          return redirect()->route('list')->with('error', ['Marriage Registration Not Completed']);
        }
    }
}

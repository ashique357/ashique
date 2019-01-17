<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nid;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function nid_view(){
      return view('nid_form');
    }
    public function nid_post(Request $request){
      Nid::create([
        "name"=>$request->name,
        "birth_date"=>$request->birth_date,
        "nid_number"=>$request->nid_number,
        "father_name"=>$request->father_name,
        "mother_name"=>$request->mother_name,
      ]);
      return redirect()->back();
    }
}

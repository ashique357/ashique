<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marriage;
use App\Admin;
use Session;
// use App\Providers\ReligionServiceProvider;
// use App\Providers\NidVerifyServiceProvider;
use Illuminate\Support\Facades\Validator;

class MarriageController extends Controller
{
  public function __construct(){
    return $this->middleware('auth');
  }
    //step-1 form
    public function CreateStep_1(){
      return view('user.marriage_form.step_1');
      //return view('muslim_marriage');
    }

    //step-1 form processing
    public function PostCreateStep_1(Request $request){

      if (isset($request)) {
        $this->validate($request, [
          'groom_name'=>'required|min:5',
          'groom_email'=>'required|email',
          'groom_dob'=>'required|date_format:"d-m-Y"',
          'groom_nid'=>'required|nid_varify:groom_name,groom_dob,groom_father_nid,groom_father_name',
          'groom_father_name'=>'required|min:5',
          'groom_father_nid'=>'required',
          'groom_status'=>'required|before_married:married_bride_name,married_bride_nid',
          'married_bride_name'=>'required_if:groom_status,true',
          'married_bride_nid'=>'required_if:groom_status,true'
        ]);
        $data=$request->all();
        $put_session_data=$request->session()->push('step',$data);
        $get_session_data=$request->session()->get('step');

        return redirect()->route('marriage.form.step2');
      }
    }

    //step-2 form
      public function CreateStep_2(){
        return view('user.marriage_form.step_2');
      }

      //step-1 form processing
      public function PostCreateStep_2(Request $request){

        if (isset($request)) {
          $this->validate($request, [
          'bride_name'=>'required|min:5',
          'bride_email'=>'required|email',
          'bride_dob'=>'required|date_format:"d-m-Y"',
          'bride_nid'=>'required|nid_varify:bride_name,bride_dob,bride_father_nid,bride_father_name',
          'bride_father_name'=>'required|min:5',
          'bride_father_nid'=>'required',
          'bride_status'=>'required|before_married:married_groom_name,married_groom_nid',
          'married_groom_name'=>'required_if:bride_status,true',
          'married_groom_nid'=>'required_if:bride_status,true'
          ]);

          $data=$request->all();
          $put_session_data=$request->session()->push('step',$data);
          $get_session_data=$request->session()->get('step');
          return redirect()->route('marriage.form.step3');
        }
    }

    //step-3 form
    public function CreateStep_3(){
      return view('user.marriage_form.step_3');
    }

    //step-3 form processing

    public function PostCreateStep_3(Request $request){

      if (isset($request)) {
        $this->validate($request, [
        'fw_name'=>'required|min:5',
        'fw_dob'=>'required|date_format:"d-m-Y"',
        'fw_nid'=>'required|nid_varify:fw_name,fw_dob,fw_father_nid,fw_father_name',
        'fw_father_name'=>'required|min:5',
        'fw_father_nid'=>'required'
        ]);

        $data=$request->all();
        $put_session_data=$request->session()->push('step',$data);
        $get_session_data=$request->session()->get('step');
        return redirect()->route('marriage.form.step4');
      }
  }

  //step-4 form
      public function CreateStep_4(){
        $admins=Admin::all();
        return view('user.marriage_form.step_4',compact('admins',$admins));
    }

  //step-4 form processing
  public function PostCreateStep_4(Request $request){

    if (isset($request)){
      $this->validate($request,[
      'pin'=>'required|numeric',
      'admin_id'=>'required',
      'religion'=>'required|religion:mortgage_money,paid_mortgage_money',
       'mortgage_money'=>'required_if:religion,muslim',
       'paid_mortgage_money'=>'required_if:religion,muslim'
      ]);
      $data=$request->all();
      $put_session_data=$request->session()->push('step',$data);
      $get_session_data=$request->session()->get('step');

      foreach ($get_session_data as $key) {
          foreach ($key as $k=>$v) {
            $insert_data[$k]=$v;
          }
      }
      $marriage=Marriage::insert($insert_data);
      echo "Information is received";
    }
  }

}

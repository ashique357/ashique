<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Route;
use Auth;
use App\Admin;

class AdminLoginController extends Controller
{
    public function __contruct(){
      $this->middleware('guest:admin',['except'=>['logout']]);
    }

    public function index(){
      return view('auth.admin_login');
    }

    protected function login(Request $request){
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      //attempt to login the admin_login
      if (Auth::guard('admin')->attempt(
        ['email'=>$request->email,
        'password'=>$request->password],
          $request->remember)) {
        //if successful,then redirect to their targeted/intended location
        return redirect()->intended(route('admin.dashboard'));
      }
      //if unsuccesful,then redirect to admin login with the input
      return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(){
      Auth::guard('admin')->logout();
      return redirect('/admin');
    }

    public function register_form(){
      return view('auth.admin_register');
    }

    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Admin
     */
    protected function create(Request $request)
    {
        $admin=Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('admin.dashboard');
    }
}

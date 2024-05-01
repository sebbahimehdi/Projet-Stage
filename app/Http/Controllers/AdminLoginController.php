<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function check(Request $request){
        $request->validate([
            'email'=>["required",'string'],
            'password' =>['required','string']
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin.dashbord.home');
        }
        else{
            return back()->withErrors([
                'email'=>'email or password est Incorect'
            ])->onlyInput('email');
        }
        // $email = $request->email;
        // $password = $request->password;
        // $value =[
        //     'email'=>$email,
        //     'password'=>$password
        // ];
        // dd(Auth::attempt($value));
        
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('Home.home');
    }
}

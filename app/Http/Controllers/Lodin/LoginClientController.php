<?php

namespace App\Http\Controllers\Lodin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginClientController extends Controller
{
    public function show(){
        return view('LoginClient.show');
    }
    public function store(Request $request ){
        $email = $request->email;
        $password = $request->password;
        $value =[
            'email'=>$email,
            'password'=>$password
        ];
        if(Auth::attempt($value)){
            $request->session()->regenerate();
            return to_route('Client.index');
        }
        else{
            return back()->withErrors([
                'email'=>'email or password est Incorect'
            ])->onlyInput('email');
        }

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('Home.home');
    }
}

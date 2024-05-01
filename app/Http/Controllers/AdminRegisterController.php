<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function registar(){
        return view('admin.register');
    }
    public function store(AdminRequest $request){
        $formFaildes =$request->validated();
        $formFaildes['password'] = Hash::make($request->password);
        Admin::create($formFaildes);
        return to_route('admin.dashbord.home')->with('admin est bien Ajouter');
    }
}

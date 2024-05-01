<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class employeRegisterController extends Controller
{
    public function create(){
        return view('employe.register');
    }
    public function store(Request $request){
        // dd($request->all());
        $formFaildes = $request->validate([
            'nom_employe'=>'required',
            'email'=>'required|email|unique:employes',
            'password'=>'required',
            'status'=>'required',
            'id_ville'=>'required',
            'profile'=>'required'
        ]);

         $formFaildes['password'] = Hash::make($request->password);
        //  dd($formFaildes);
        Employe::create($formFaildes);
        return to_route('admin.dashbord.home');
        

    }

}

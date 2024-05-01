<?php

namespace App\Http\Controllers;

use App\Models\Type_client;
use Illuminate\Http\Request;

class TypeclientController extends Controller
{
    public function create(){
        return view('typeClient.create');

    }
    public function store(Request $request){
        $formFaildes = $request->validate([
            'nom_type'=>'required'
        ]);
        Type_client::create($formFaildes);
    }
}

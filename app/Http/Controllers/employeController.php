<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class employeController extends Controller
{
    public function index(){
        $commandes = Commande::all();
        return view('commande.index',compact('commandes'));
    }

    
}

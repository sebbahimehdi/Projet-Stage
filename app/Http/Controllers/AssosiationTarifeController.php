<?php

namespace App\Http\Controllers;

use App\Models\Pays;

use Illuminate\Http\Request;
use App\Models\Assosiation_tarife;
use App\Models\Tarif;

class AssosiationTarifeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('assosiationTarif.create',compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assosiationTarifs = Assosiation_tarife::with('pays', 'tarife')->get();
        $pays = Pays::with('asosiasionTarifs')->get();
        $tarifes = Tarif::with('asosiasionTarifs')->get();
    
        // Pass variables individually to the compact function
        return view('assosiationTarif.create', compact('assosiationTarifs', 'pays', 'tarifes'));
    }
    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFaildes = $request->validate([
            'id_pays'=>'required',
            'id_tarife'=>'required',
            'Taxe_tarife'=>'required'
        ]);
        // dd($formFaildes);
        Assosiation_tarife::create($formFaildes);
        
    }

    public function edit(Assosiation_tarife $assosiationTarif){
        return view('assosiationTarif.editTarif',compact('assosiationTarif'));

    }
    public function update(Request $request ,Assosiation_tarife $assosiationTarif){

        $formFaildes = $request->validate([
            'id_pays'=>'required',
            'id_tarife'=>'required',
            'Taxe_tarife'=>'required'
        ]);
        $assosiationTarif->fill($formFaildes)->save();
        return to_route('assosiation-tarif.store');

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Destinataire;
use Illuminate\Http\Request;
use App\Http\Requests\DestenataireRequest;

class DestinataireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinataire.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DestenataireRequest $request){
        $formFaildes = $request->validated();
        Destinataire::create($formFaildes);
        return to_route('Commande.create');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinataire $destinataire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinataire $destinataire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destinataire $destinataire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinataire $destinataire)
    {
        //
    }
}

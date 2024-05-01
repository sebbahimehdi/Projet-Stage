<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;


class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $Pays = Pays::all();
        return view('pays.index',compact('Pays'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pays.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        // dd($request->all());
        $formFaildes =$request->validate([
            'nom_pays'=>'required'
        ]);
        Pays::create($formFaildes);

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Pays $pays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pays $pays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pays $pays)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pays $pays)
    {
        //
    }
}

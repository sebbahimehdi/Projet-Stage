<?php

namespace App\Http\Controllers;

use App\Models\association_type_clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssociationController extends Controller
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
        return view('assosiationClient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id_Client = $request->id_client;
        $id_type_client = $request->id_type_client;
        $id_type_peice_indentite=$request->id_type_peice_indentite;
        $value =[
            'id_client'=>$id_Client,
            'id_type_client'=>$id_type_client,
           
            'id_type_peice_indentite'=>$id_type_peice_indentite
        ];
        $value['id_client'] = Auth::id();
        association_type_clients::create($value);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

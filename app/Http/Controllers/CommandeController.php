<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Destinataire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
            $commandes = Commande::with('client', 'destinataires')->get();
            $clients = Client::with('commandes')->get();
            $destinataires = Destinataire::with('commandes')->get();
            return view('commande.index', compact('commandes', 'clients', 'destinataires'));
        }
        // $commandes = Commande::all();
        // return view('commande.index',compact('Commandes','client','destinataires'));
    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('commande.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $formFaildes = $request->validate([
            'poids_commande'=>'required',
            'id_destinataire'=>'required',
            'date_validation'=>'required',
            'date_recevoire'=>'required',
            'taxe_commande'=>'required',
        ]);
        $formFaildes['id_client']= Auth::id();
         Commande::create($formFaildes);
         return to_route('Client.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
    }
}

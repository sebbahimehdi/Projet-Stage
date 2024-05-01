<?php

namespace App\Http\Controllers;

use App\Models\Pays;

use Illuminate\Http\Request;
use App\Models\association_type_clients;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function __construct(){
        return $this->middleware('auth:admin')->except(['index','create','edit','update','store','show','destory']);
    }
    public function createPays() {
        return view('pays.create');
    }
    public function storePays(Request $request)
    {
        $formFaildes = $request->validate([
            'nom_pays'=>'required'
        ]);
        Pays::create($formFaildes);
        return to_route('Client.index');
    }

    public function createAssociation()
    {
        return view('client.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeAssociation(Request $request)
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
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(3);
        return view('client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request){
        $formFaildes = $request->validated();
        $formFaildes['password'] = Hash::make($request->password);
        $formFaildes['image'] = $request->file('image')->store('client','public');
        Client::create($formFaildes);
        return to_route('admin.dashbord.home')->with('success','le Clent est bien Ajouter');
    }
    /**
     * Display the specified resource.
     */
    public function show(Client $Client){
        return view('admin.show',compact('Client'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $Client){
        return view('client.edit',compact('Client'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, Client $Client){
        $formFaildes = $request->validated();
        $formFaildes['password'] = Hash::make($request->password);
        $formFaildes['image'] = $request->file('image')->store('client','public');
        $Client->fill($formFaildes)->save();
        return to_route('admin.dashbord.home')->with('success','le Client est Bien Modifee');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $Client) {
        $Client->delete();
        return back()->with('danger','le client est bien Supprimer');
        
    }
}

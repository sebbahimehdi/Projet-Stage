<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;
    protected $fillable =[
        'poids_commande',
        'id_client',
        'id_destinataire',
        'date_validation',
        'date_recevoire',
        'taxe_commande'
    ];
    public function client(){
        return $this->belongsTo(Client::class,'id_client');
    }
    public function destinataires(){
        return $this->belongsTo(Destinataire::class,'id_destinataire');
    }
}

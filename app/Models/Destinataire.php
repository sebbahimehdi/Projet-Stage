<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destinataire extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom_desyinataire',
        'adresse',
        'id_pays'
    ];

    public function  commandes(){
        return $this->belongsTo(Commande::class,'id_desyinataire','id');
    }
}

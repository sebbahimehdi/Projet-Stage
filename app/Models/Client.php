<?php

namespace App\Models;

use App\Models\Pays;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable =[
        'email',
        'password',
        'nom_complet',
        'adresse',
        'numero_tel',
        'image',
        'id_ville'
    ];
  public function commandes(){
    return $this->belongsTo(Commande::class);
  }
}
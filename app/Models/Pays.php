<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pays extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom_pays'
    ];

    // public function client(){
    //     return $this->belongsTo(Client::class);
    // }

    public function asosiasionTarifs(){
        return $this->belongsTo(Assosiation_tarife::class,'id_pays','id');
    }
}



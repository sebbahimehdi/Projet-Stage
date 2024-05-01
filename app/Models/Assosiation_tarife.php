<?php

namespace App\Models;

use App\Models\Pays;
use App\Models\Tarif;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assosiation_tarife extends Model
{
    use HasFactory;
    protected $fillable =[
        
        'id_pays',
        'id_tarife',
        'Taxe_tarife'
    ];
    // public function Tarifes(){
    //     return $this->belongsTo(Tarif::class);
    // }


    public function pays(){
        return $this->belongsTo(Pays::class,'id_pays');
    }

    public function tarife(){
        return $this->belongsTo(Tarif::class,'id_tarife');
    }
}


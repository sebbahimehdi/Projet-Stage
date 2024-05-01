<?php

namespace App\Models;
use App\Models\Assosiation_tarife;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'poides_debut',
        'poides_fin'
    ];
    public function asosiasionTarifs(){
        return $this->belongsTo(Assosiation_tarife::class,'id_tarif','id');
    }
}

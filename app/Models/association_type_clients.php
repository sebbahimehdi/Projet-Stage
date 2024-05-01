<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class association_type_clients extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_client',
        'id_type_client',
        'id_type_peice_indentite'
    ];
}



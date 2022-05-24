<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_objectif',
        'nom_objectif',
        'montant_cible',
        'montant_enregistré',
        'date',
        'description_objectif',
        'id_typeobjectif',
        'id'
    ];
}

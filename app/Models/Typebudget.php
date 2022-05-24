<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typebudget extends Model
{
    use HasFactory;

    protected $fillable=[

        'id_typebudget',
        'nom_typebudget',
        
    ];
}

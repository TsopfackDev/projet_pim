<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeobjectif extends Model
{
    use HasFactory;

    protected $fillable=[
        
        'id_typeobjectif',
        'nom_typeobjectif',
       
    ];
}

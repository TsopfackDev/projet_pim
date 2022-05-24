<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dette extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_dette',
        'montant_dette',
        'type_dette',
        'id'
    ];

}

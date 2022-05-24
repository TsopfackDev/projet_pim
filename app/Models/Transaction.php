<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_transaction',
        'libelle_transaction',
        'montant_transaction',
        'id_compte',
        'id'
    ];
}

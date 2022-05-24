<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_budget',
        'nom_budget',
        'montant_budget',
        'periode',
        'devise',
        'id_typebudget',
        'id'
    ];
}

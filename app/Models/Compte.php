<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;
    protected $fillable= [
        'id_compte',
        'nom_compte',
        'devise_compte',
        'id',
    ];

}

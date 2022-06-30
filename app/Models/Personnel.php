<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $table = 'personnel';
    protected $fillable = [
        'id_personnel',
        'nom_personnel',
        'prenom_personnel',
        'telephone_personnel',
        'sexe',
        'email',
        'fonction',
        'salaire'
    ];
}

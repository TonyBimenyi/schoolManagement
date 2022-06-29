<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'enseignants';
    protected $fillable = [
        'nom_ens',
        'prenom_ens',
        'telephone_ens',
        'adress_ens',
        'sexe_ens'
    ];
}

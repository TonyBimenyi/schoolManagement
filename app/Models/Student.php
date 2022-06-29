<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'etudiants';
    protected $fillable = [
        'nom_etu',
        'prenom_etu',
        'role',
        'password',
        'etat'
    ];
}

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
        'date_naiss',
        'email_etu',
        'adress_etu',
        'telephone_etu',
        'promotion',
        'sexe_etu',
        'fac_etu',
        'spec_etu',
        'classe',
        'annee_academique'
    ];
}

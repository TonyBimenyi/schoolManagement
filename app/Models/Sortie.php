<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    use HasFactory;
    protected $table = 'sorties';
    protected $fillable = [
        'id_sortie',
        'type_sortie',
        'designation_sortie',
        'montant_sortie'
    ];
}

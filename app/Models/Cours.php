<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $table = 'cours';
    protected $fillable = [
        'id_cours',
        'nom_cours',
        'credits',
        'class',
        'unite',
        'id_ens',
        'fac_etu',
        'id_spec'
    ];
}

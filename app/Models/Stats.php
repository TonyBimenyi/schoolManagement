<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;
    protected $table = 'stats';
    protected $fillable = [
        'id_stat',
        'type_depense',
        'montant_depense',
        'type_revenu',
        'montant_revenu',
        'date_revenu',
        'id_entree',
        'id_sortie',
        'id_salaire',
        'id_minerval',
    ];
}

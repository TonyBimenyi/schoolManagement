<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    use HasFactory;
    protected $table = 'specialisations';
    protected $fillable = [
        'nom_spec',
        'id_fac',
    ];
}

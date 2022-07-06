<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaire extends Model
{
    use HasFactory;
    protected $table = 'salaires';
    protected $fillable = [
        'id_salaire',
        'id_personnel',
        'montant_salaire'
    ];
}

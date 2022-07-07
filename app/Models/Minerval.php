<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minerval extends Model
{
    use HasFactory;
    protected $table = 'minervals';
    protected $fillable = [
        'montant_paye',
        'montant_total',
        'tranche',
    ];
}

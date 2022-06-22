<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fac extends Model
{
    use HasFactory;
    protected $table = 'fac';
    protected $fillable = [
        'nom_fac',
        'spec'
    ];
}

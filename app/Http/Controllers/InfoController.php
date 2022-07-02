<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function id_etudiant()
    {
        return view('info_etudiant.info_etudiant');
    }
}

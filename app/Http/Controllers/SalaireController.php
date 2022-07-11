<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Stats;

class SalaireController extends Controller
{
    public function index_salaire()
    {
        $personnel=Personnel::get();
        return view('finances.salaire.add_salaire',compact('personnel'));
    }
    public function insert_salaire(request $request)
    {

        $salaire = new Salaire();
        $student->nom_etu = $request->input('nom');
        $student->prenom_etu = $request->input('prenom');
    }
}

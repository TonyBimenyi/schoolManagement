<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Stats;
use App\Models\Salaire;

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
        $salaire->id_salaire = $request->input('id_salaire');
        $salaire->nom_personnel = $request->input('nom');
        $salaire->montant_salaire = $request->input('montant');
        $salaire->save();
        return redirect('list_minos')->with('alert',"Le Salaire est ajoute");
    }
}

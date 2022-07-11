<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Stats;
use App\Models\Sortie;
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
        $salaire->montant_salaire = $request->input('salaire');
        $salaire->save();

        $sortie = new Sortie();
        $sortie->type_sortie = 'Salaire';
        $sortie->id_sortie = 'so'.rand(10,999999);
        $sortie->designation_sortie = $request->input('nom');
        $sortie->montant_sortie = $request->input('salaire');
        $sortie->id_salaire = $request->input('id_salaire');
        $sortie->save();

        $stats = new Stats();
        $stats->type_depense = 'Salaire';
        $stats->montant_depense = $request->input('salaire');
        $stats->id_salaire = $request->input('id_salaire');
        $stats->save();

        return redirect('add_salaire')->with('alert',"Le Salaire est ajoute");
    }
}

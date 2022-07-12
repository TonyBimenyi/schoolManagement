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
    public function list_salaire()
    {
        return view('finances.salaire.list_salaire');
    }
    public function insert_salaire(request $request)
    {



        $sortie = new Sortie();
        $sortie->type_sortie = 'Salaire';
        $sortie->id_sortie = $request->input('id_sortie');
        $sortie->designation_sortie = 'Salaire d un personnel';
        $sortie->montant_sortie = $request->input('salaire');
        $sortie->id_personnel = $request->input('id_personnel');
        $sortie->save();

        $stats = new Stats();
        $stats->type_depense = 'Salaire';
        $sortie->id_sortie = $request->input('id_sortie');
        $stats->montant_depense = $request->input('salaire');
        $stats->save();

        return redirect('list_salaire')->with('alert',"Le Salaire est ajoute");
    }
}

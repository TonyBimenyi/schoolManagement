<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Stats;
use App\Models\Entree;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $count_student = Student::count('id_etu');
        $sum_depenses = Stats::sum('montant_depense');
        $sum_rev = Stats::sum('montant_revenu');
        $minervals = Entree ::select(DB::raw('entrees.*,etudiants.*,facultes.*,specialisations.*'))
        ->join('etudiants','entrees.id_etu','=','etudiants.id_etu')
        ->join('facultes','etudiants.id_fac','=','facultes.id_fac')
        ->join('specialisations','etudiants.id_spec','=','specialisations.id_spec')
        ->where('type_entree','Minerval')
        ->limit(5)
        ->get();
        // return view('dashboard');
        return view('dashboard',compact('count_student','sum_depenses','sum_rev','minervals'));
    }
    public function login()
    {
        return view('auth.login');
    }
}

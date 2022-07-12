<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculte;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Specialisation;
use App\Models\Minerval;
use App\Models\Stats;
use App\Models\Entree;
use DB;

class FinanceController extends Controller
{
    public function index()
    {
        return view('finances.dashboard.dashboard');
    }
     public function list_etudiants()
    {
        $faculte = Faculte::get();
        $students = Student ::select(DB::raw('etudiants.*,facultes.*,specialisations.*'))
        ->join('facultes','etudiants.id_fac','=','facultes.id_fac')
        ->join('specialisations','etudiants.id_spec','=','specialisations.id_spec')
        // ->where('products.id',$id)
        ->get();
        return view('finances.minervals.student_list',compact('faculte','students'));
    }
    public function add_minerval($id)
    {
        // $student=Student::where('id_etu',$id)->first();
        $student = Student ::select(DB::raw('etudiants.*,facultes.*,specialisations.*'))
        ->join('facultes','etudiants.id_fac','=','facultes.id_fac')
        ->join('specialisations','etudiants.id_spec','=','specialisations.id_spec')
        ->where('etudiants.id_etu',$id)
        ->first();
        $faculte = Faculte::get();

        return view('finances.minervals.add_minos',compact('faculte','student'));
    }
    public function insert_minerval(Request $request)
    {
        $minos = new Entree();


        $minos->type_entree = 'Minerval';
        $minos->id_entree = $request->input('id_entree');
        $minos->designation_entree = $request->input('nom');
        $minos->montant_entree = $request->input('montant');
        $minos->id_etu = $request->input('id_etu');
        $minos->tranche = $request->input('tranche');
        $minos->save();
        $stat = new Stats();
        $stat->type_revenu = 'Minerval';
        $stat->montant_revenu = $request->input('montant');
        $stat->id_entree = $request->input('id_entree');
        $stat->save();
        return redirect('list_minos')->with('alert',"Le paiement est valide");
    }

    public function list_minerval()
    {
        $minervals = Entree ::select(DB::raw('entrees.*,etudiants.*,facultes.*,specialisations.*'))
        ->join('etudiants','entrees.id_etu','=','etudiants.id_etu')
        ->join('facultes','etudiants.id_fac','=','facultes.id_fac')
        ->join('specialisations','etudiants.id_spec','=','specialisations.id_spec')
        ->where('type_entree','Minerval')
        ->get();

        $sum = Entree::sum('montant_entree');
        return view('finances.minervals.list_minos',compact('minervals','sum'));

    }
    public function stats(Request $request)
    {
        $stats = Stats::select(DB::raw('stats.*'))
        ->get();
        return view('finances.stats.stats',compact('stats'));
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculte;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Specialisation;
use App\Models\Minerval;
use App\Models\Stats;
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
        $minos = new Minerval();
        $minos->id_etu = $request->input('id_etu');
        $minos->montant_paye = $request->input('montant');
        $minos->montant_total = $request->input('montant_total');
        $minos->tranche = $request->input('tranche');
        $minos->save();
        $stat = new Stats();
        $stat->type_revenu = 'Minerval';
        $stat->montant_revenu = $request->input('montant');
        $stat->id_minerval = $request->input('id_min');
        $stat->save();
        return redirect('list_minos')->with('alert',"Le paiement est valide");
    }

    public function list_minerval()
    {
        $minervals = Minerval ::select(DB::raw('minervals.*,etudiants.*,facultes.*,specialisations.*'))
        ->join('etudiants','minervals.id_etu','=','etudiants.id_etu')
        ->join('facultes','etudiants.id_fac','=','facultes.id_fac')
        ->join('specialisations','etudiants.id_spec','=','specialisations.id_spec')
        // ->where('products.id',$id)
        ->get();
        return view('finances.minervals.list_minos',compact('minervals'));
    }


}

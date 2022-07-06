<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculte;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Specialisation;
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


}

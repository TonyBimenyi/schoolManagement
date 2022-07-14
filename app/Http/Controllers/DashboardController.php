<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Stats;

class DashboardController extends Controller
{
    public function index()
    {
        $count_student = Student::count('id_etu');
        $sum_depenses = Stats::sum('montant_depense');
        // return view('dashboard');
        return view('dashboard',compact('count_student','sum_depenses'));
    }
    public function login()
    {
        return view('auth.login');
    }
}

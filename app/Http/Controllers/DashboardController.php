<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sum_student = Student::sum('id_etu');
        // return view('dashboard');
        return view('dashboard',compact('sum_student'));
    }
    public function login()
    {
        return view('auth.login');
    }
}

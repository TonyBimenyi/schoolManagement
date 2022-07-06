<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        return view('finances.dashboard.dashboard');
    }
     public function add_minerval(Request $request)
    {
        return view('finances.minervals.add_minos');
    }
}

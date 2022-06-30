<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personnel;

class PersonnelController extends Controller
{
    public function list_personnel()
    {
        $personnel = Personnel::get();
        return view('utilisateurs.personnel.personnel',compact('personnel'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class AdminController extends Controller
{
    public function list_admin()
    {
       $utilisateur = Utilisateur::get();
       return view('utilisateurs.admin.admin',compact('utilisateur'));
    }
}


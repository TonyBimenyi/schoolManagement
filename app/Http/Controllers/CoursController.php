<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;

class CoursController extends Controller
{
    public function list_cours()
    {
        $cours = Cours::get();

        return view('cours.cours',compact('cours'));
    }
    public function create_cours(Request $request)
    {
        return view('cours.create_cours');
    }
}

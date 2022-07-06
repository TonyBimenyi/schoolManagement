<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sortie;

class SortieController extends Controller
{
    public function list()
    {
        $sortie=Sortie::get();
        return view('finances.sorties.list_sortie',compact('sortie'));
    }
    public function create_sortie()
    {
        return view('finances.sorties.add_sortie');
    }
   
}

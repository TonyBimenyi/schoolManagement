<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entree;


class EntreeController extends Controller
{
    public function list()
    {
        $entree=Entree::get();

        return view('finances.Entrees.entree',compact('entree'));
    }
}

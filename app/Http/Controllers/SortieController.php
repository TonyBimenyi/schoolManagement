<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sortie;
use DB;

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
    public function insert_sortie(Request $request)
    {
        $sorties=new Sortie();
        $sorties->type_sortie=$request->input('type');
        $sorties->designation_sortie=$request->input('designation');
        $sorties->montant_sortie=$request->input('montant');
        $sorties->save();

        return redirect('list_sortie')->with('alert','Sortie enregistrée avec succès');
    }

    public function edit_sortie($id)
    {
        $sorties=Sortie::where('id_sortie',$id)->first();

        return view('finances.sorties.edit_sortie');
    }
   
}

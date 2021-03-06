<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entree;
use App\Models\Stats;
use DB;

class EntreeController extends Controller
{
    public function list()
    {
        $entree=Entree::get();
        $sum=Entree::select(DB::raw('SUM(montant_entree) as total'));


        return view('finances.Entrees.entree',compact('entree','sum'));
    }
    public function create()
    {
        return view('finances.Entrees.create_entree');
    }
    public function insert(Request $request)
    {
        $entrees=new Entree();
        $entrees->id_entree=$request->input('id');
        $entrees->type_entree=$request->input('type');
        $entrees->designation_entree=$request->input('designation');
        $entrees->montant_entree=$request->input('montant');
        $entrees->save();
        $stat = new Stats();
        $stat->id_entree=$request->input('id');
        $stat->type_revenu=$request->input('type');
        $stat->montant_revenu=$request->input('montant');
        $stat->save();

        return redirect('entree')->with('alert', 'Entrée enregistré avec succès');
    }
    public function edit_entree($id)
    {
        $entrees=Entree::where('id_entree',$id)->first();

        return view('finances.Entrees.edit_entree',compact('entrees'));
    }
    public function update_entree(Request $request,$id)
    {
        $entrees=DB::table('entrees')
        ->where('id_entree',$id)
        ->update(['type_entree'=>$request->input('type'),
                    'designation_entree'=>$request->input('designation'),
                    'montant_entree'=>$request->input('montant')]);
        $stats=DB::table('stats')
        ->where('id_entree',$id)
        ->update(['type_revenu'=>$request->input('type'),
                    'montant_revenu'=>$request->input('montant')]);

                    return redirect('entree')->with('alert','Entree a été modifié');
    }
    public function delete_entree($id)
    {
        $entrees=Entree::where('id_entree',$id)->delete();

        $stats=Stats::where('id_entree',$id)->delete();
        return redirect('entree')->with('alert','Entrée a été supprimée');
    }

}

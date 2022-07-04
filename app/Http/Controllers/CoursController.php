<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Faculte;
use App\Models\Teacher;
use DB;

class CoursController extends Controller
{
    public function list_cours()
    {
        $cours = Cours::get();

        return view('cours.cours',compact('cours'));
    }
    public function create_cours()
    {
        $faculte = Faculte::get();
        return view('cours.create_cours',compact('faculte'));
    }
    public function getState(Request $request)
    {
        $cid= $request->post('cid');
        $state=DB::table('specialisations')->where('id_fac',$cid)
        ->get();
                $html='<option name="spec" value="" disabled>Select Specialisation</option>';
        foreach($state as $list){
          $html.= '<option value="'.$list->id_spec.'">'.$list->nom_spec.'</option>';
         }
    echo $html;
    }
}

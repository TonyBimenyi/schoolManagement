<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculte;
use App\Models\Admin;
use App\Models\Specialisation;
use DB;

class StudentController extends Controller
{
    public function create_student()
    {
        $faculte = Faculte::get();
        return view('utilisateurs.students.create_student',compact('faculte'));
    }
    public function getState(Request $request)
    {
        $cid= $request->input('cid');
        $state = Specialisation ::select(DB::raw('specialisations.nom_spec'))
        ->join('facultes','specialisations.id_fac','=','facultes.id_fac')
        // ->where('specialisations.id_fac',$cid)
        ->get();
                $html='<option value="">Select Specialisation</option>';
        foreach($state as $list){
          $html.= '<option value="'.$list->id_spec.'">'.$list->nom_spec.'</option>';
         }
    echo $html;
    }
}

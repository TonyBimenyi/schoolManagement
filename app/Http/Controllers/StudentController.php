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
        $cid= $request->post('cid');
        $state=DB::table('specialisations')->where('id_fac',$cid)
        ->get();
                $html='<option value="" disabled>Select Specialisation</option>';
        foreach($state as $list){
          $html.= '<option value="'.$list->id_spec.'">'.$list->nom_spec.'</option>';
         }
    echo $html;
    }
    public function insert_student()
    {

    }
}

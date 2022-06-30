<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculte;
use App\Models\Admin;
use App\Models\Student;
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
                $html='<option name="spec" value="" disabled>Select Specialisation</option>';
        foreach($state as $list){
          $html.= '<option value="'.$list->id_spec.'">'.$list->nom_spec.'</option>';
         }
    echo $html;
    }
    public function insert_student(Request $request)
    {
        $student = new Student();
        $student->nom_etu = $request->input('nom');
        $student->prenom_etu = $request->input('prenom');
        $student->date_naiss = $request->input('birthdate');
        $student->email_etu = $request->input('email');
        $student->adress_etu = $request->input('address');
        $student->telephone_etu = $request->input('phone');
        $student->promotion = $request->input('promotion');
        $student->sexe_etu = $request->input('sexe');
        $student->id_fac = $request->input('faculte');
        $student->id_spec = $request->input('specialisation');
        $student->classe = $request->input('classe');
        $student->annee_academique = $request->input('annee_aca');
        $student->save();
        return redirect('student')->with('alert',"Student Added succcessfully");;
    }
    public function list_student()
    {
        return view('utilisateurs.students.student');
    }
}

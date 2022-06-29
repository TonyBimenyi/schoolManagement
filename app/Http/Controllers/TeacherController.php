<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function list_teacher()
    {
        $enseignant = Teacher::get();
        return view('utilisateurs.teacher.teacher',compact('enseignant'));
    }
    public function create_teacher(Request $request)
    {
        return view('utilisateurs.teacher.create_teacher');
    }
    public function insert_teacher(Request $request)
    {
        $teacher=new Teacher();
        $teacher->nom_ens=$request->input('nom');
        $teacher->prenom_ens=$request->input('prenom');
        $teacher->telephone_ens=$request->input('phone');
        $teacher->email_ens=$request->input('mail');
        $teacher->adress_ens=$request->input('adresse');
        $teacher->sexe_ens=$request->input('sexe');
        $teacher->save();
        return redirect('teacher')->with('alert',"Teacher added successfully");;

    }
}

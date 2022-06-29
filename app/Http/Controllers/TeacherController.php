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
        $teacher->nom=$request->input('nom');
        $teacher->prenom=$request->input('prenom');
        $teacher->phone=$request->input('phone');
        $teacher->mail=$request->input('mail');
        $teacher->adresse=$request->input('adresse');
        $teacher->sexe=$request->input('sexe');
        $teacher->save();
        return redirect('teacher')->with('alert',"Teacher added successfully");

    }
}

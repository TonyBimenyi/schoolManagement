<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use DB;

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
    public function edit_teacher($id)
    {
        $teacher=Teacher::where('id_ens',$id)->first();

        return view('utilisateurs.teacher.edit_teacher',compact('teacher'));
    }
    public function update_teacher(Request $request,$id)
    {
        $personnel=DB::table('enseignants')
        ->where('id_ens',$id)
        ->update(['nom_ens'=>$request->input('nom'),
                    'prenom_ens'=>$request->input('prenom'),
                    'telephone_ens'=>$request->input('phone'),
                    'email_ens'=>$request->input('mail'),
                    'adress_ens'=>$request->input('adresse'),
                    'sexe_ens'=>$request->input('sexe')
                    ]
    );
    return redirect('teacher')->with('alert',"Teacher modified successfully");
    }
    public function delete_teacher($id)
    {
        $teacher=Teacher::where('id_ens',$id)->delete();

        return redirect('teacher')->with('alert',"Teacher deleted successfully");
    }
}

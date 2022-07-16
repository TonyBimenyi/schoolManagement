<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculte;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Specialisation;
use DB;
use PDF;

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
    public function getClasse(Request $request)
    {
        $cla= $request->post('cla');
        $state=DB::table('etudians')->where('classe',$cla)
        ->get();
                $html='<option name="spec" value="" disabled>Select Specialisation</option>';
        foreach($state as $list){
          $html.= '<tr>
                    <td>'.$list->nom_etu.'</td>
                    <td>'.sad.'</td>
                    <td>'.sdsd.'</td>
          </tr>';
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
        $student->etat_civil = $request->input('etat');
        $student->save();
        return redirect('student')->with('alert',"L'étudiant est enregisté");;
    }
    public function list_student()
    {
        $students = Student ::select(DB::raw('etudiants.*,facultes.*,specialisations.*'))
        ->join('facultes','etudiants.id_fac','=','facultes.id_fac')
        ->join('specialisations','etudiants.id_spec','=','specialisations.id_spec')
        // ->where('products.id',$id)
        ->get();
        return view('utilisateurs.students.student',compact('students'));
    }
    public function edit_student($id)
    {
        // $student=Student::where('id_etu',$id)->first();
        $student = Student ::select(DB::raw('etudiants.*,facultes.*,specialisations.*'))
        ->join('facultes','etudiants.id_fac','=','facultes.id_fac')
        ->join('specialisations','etudiants.id_spec','=','specialisations.id_spec')
        ->where('etudiants.id_etu',$id)
        ->first();
        $faculte = Faculte::get();

        return view('utilisateurs.students.edit_student',compact('student','faculte'));
    }
    public function update_student(Request $request,$id)
    {
        $student=DB::table('etudiants')
        ->where('id_etu',$id)
        ->update(['nom_etu'=>$request->input('nom'),
                    'prenom_etu'=>$request->input('prenom'),
                    'date_naiss'=>$request->input('birthdate'),
                    'email_etu'=>$request->input('email'),
                    'adress_etu'=>$request->input('address'),
                    'telephone_etu'=>$request->input('phone'),
                    'promotion'=>$request->input('promotion'),
                    'sexe_etu'=>$request->input('sexe'),
                    'id_fac'=>$request->input('faculte'),
                    'id_spec'=>$request->input('specialisation'),
                    'classe'=>$request->input('classe'),
                    'annee_academique'=>$request->input('annee_aca'),
                    'etat_civil'=>$request->input('etat'),
                    ]
    );
    return redirect('student')->with('alert',"L'etudiant est modifié");
    }
    public function delete_student($id)
    {
        $student=Student::where('id_etu',$id)->delete();

        return redirect('student')->with('alert',"L'étudiant est supprimé");
    }
    public function attestation($id)
    {
            // $student=Student::where('id_etu',$id)->first();
            $student = Student ::select(DB::raw('etudiants.*,facultes.*,specialisations.*'))
            ->join('facultes','etudiants.id_fac','=','facultes.id_fac')
            ->join('specialisations','etudiants.id_spec','=','specialisations.id_spec')
            ->where('etudiants.id_etu',$id)
            ->first();
            $faculte = Faculte::get();

            return view('utilisateurs.students.attestation',compact('student','faculte'));
    }
    public function att()
    {
        return view::make('utilisateurs.students.attestation');
    }

}

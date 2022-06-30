<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class PersonnelController extends Controller
{
    public function list_personnel()
    {
        $personnel = Personnel::get();
        return view('utilisateurs.personnel.personnel',compact('personnel'));
    }
    public function create_personnel(Request $request)
    {
        return view('utilisateurs.personnel.create_personnel');
    }
    public function insert_personnel(Request $request)
    {
        $personnel=new Personnel();
        $personnel->nom_personnel=$request->input('nom');
        $personnel->prenom_personnel=$request->input('prenom');
        $personnel->telephone_personnel=$request->input('telephone');
        $personnel->sexe=$request->input('sexe');
        $personnel->email=$request->input('mail');
        $personnel->fonction=$request->input('fonction');
        $personnel->salaire=$request->input('salaire');
        $personnel->save();
        $admin=new Admin();
        $admin->name=$request->input('nom');
        $admin->username=$request->input('prenom');
        $admin->email=$request->input('mail');
        $admin->password = Hash::make($request->input('fonction'));
        $admin->role=$request->input('fonction');
        $admin->etat='1';
        $admin->save();
        return redirect('personnel')->with('alert',"Personnel added successfully");
    }
}

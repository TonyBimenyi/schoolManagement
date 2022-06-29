<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function list_admin()
    {
       $utilisateur = Utilisateur::get();
       return view('utilisateurs.admin.admin',compact('utilisateur'));
    }
    public function create_admin(Request $request)
    {
        return view('utilisateurs.admin.create_admin');
    }
    public function insert_admin(Request $request)
    {
        $admin_user = new Admin();
        $admin_user->name = $request->input('name');
        $admin_user->username = $request->input('username');
        $admin_user->email = $request->input('email');
        $admin_user->password = Hash::make($request->input('password'));
        $admin_user->role = $request->input('role');
        $admin_user->etat = '0';
        $admin_user->save();
        return redirect('admin')->with('alert',"Admin Added succcessfully");;

    }
}


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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list_teacher()
    {
        return view('utilisateurs.teacher.teacher');
    }
}

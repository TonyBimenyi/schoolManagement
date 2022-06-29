<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create_student()
    {
        return view('utilisateurs.students.create_student');
    }
}

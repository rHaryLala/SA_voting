<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $tbl_2024_etudiant = Student::all();

        return view('studentdb', compact('tbl_2024_etudiant'));
    }
}

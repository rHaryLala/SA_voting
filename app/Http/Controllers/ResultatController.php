<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    public function index()
    {
        $candidats = Candidat::all();

        return view('resultatdb', compact('candidats'));
    }
}

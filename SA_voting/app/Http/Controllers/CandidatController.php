<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function index()
    {
        // Récupérer tous les utilisateurs
        $candidats = Candidat::all();

        // Passer les utilisateurs à la vue
        return view('candidatdb', compact('candidats'));
    }
}

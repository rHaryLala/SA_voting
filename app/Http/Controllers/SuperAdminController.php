<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidat;

class SuperAdminController extends Controller
{
    public function index()
    {
        // Récupérer le nombre d'utilisateurs
        $userCount = User::count();

        // Récupérer le nombre de candidats
        $candidatCount = Candidat::count();

        // Passer le nombre d'utilisateurs et de candidats à la vue
        return view('superadmin', compact('userCount', 'candidatCount'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SuperAdminController extends Controller
{
    public function index()
    {
        // Récupérer le nombre d'utilisateurs
        $userCount = User::count();

        // Passer le nombre d'utilisateurs à la vue
        return view('superadmin', compact('userCount'));
    }
}

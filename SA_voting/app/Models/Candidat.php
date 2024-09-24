<?php

namespace App\Http\Controllers;

use App\Models\Candidat; // Import du modèle Candidat
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        return view('vote');
    }
}

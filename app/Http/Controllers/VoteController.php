<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        // Récupère tous les candidats de la base de données
        $candidats = Candidat::all();
        return view('vote', compact('candidats'));
    }

    public function vote($id)
    {
        $user = auth()->user();

        // Vérifie si l'utilisateur a déjà voté
        if ($user->has_voted) {
            return redirect()->back()->with('error', 'Vous avez déjà voté !');
        }

        // Trouve le candidat par ID et incrémente le compteur de votes
        $candidat = Candidat::findOrFail($id);
        $candidat->increment('votes');

        // Met à jour l'état du vote de l'utilisateur
        $user->has_voted = true;
        $user->save();

        return redirect()->back()->with('success', 'Votre vote a été pris en compte !');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        return view('vote');
    }

    public function vote($id)
    {
        // Find the candidate by ID and increment the vote count
        $candidat = Candidat::findOrFail($id);
        $candidat->increment('votes');

        return redirect()->back()->with('success', 'Votre vote a été prise en compte !');
    }
}

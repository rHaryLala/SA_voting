<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Candidat;

class InsertCandidate extends Component
{
    public $matricule;
    public $name;
    public $last_name;
    public $mention;
    public $image; // Utilisez ceci si vous gérez une image
    public $modalOpen = false; // Ajoutez cette ligne

    public function __construct()
    {
        $this->modalOpen = false;
    }

    protected $rules = [
        'matricule' => 'required|string|max:255|unique:candidats',
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'mention' => 'required|string|max:255',
        'image' => 'nullable|string|max:255', // Modifiez si vous gérez le téléchargement d'images
    ];

    public function insertCandidate()
    {
        $this->validate();

        Candidat::create([
            'matricule' => $this->matricule,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'mention' => $this->mention,
            'image' => $this->image, // Gérez le stockage de l'image si nécessaire
        ]);

        $this->reset(); // Réinitialiser les champs du formulaire
        session()->flash('message', 'Candidat ajouté avec succès.');
        $this->modalOpen = false; // Ferme le modal après l'insertion
    }

    public function render()
    {
        return view('livewire.insert-candidate');
    }

    protected $listeners = ['openModal' => 'showModal', 'closeModal' => 'hideModal'];

    public function showModal()
    {
        $this->modalOpen = true;
    }

    public function hideModal()
    {
        $this->modalOpen = false;
    }
}

<?php

namespace App\Http\Livewire\VetFemme;

use App\Models\VetementFemme;
use Livewire\Component;
use Livewire\WithPagination;

class EnsemblesCombinaisonsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $ensembleCombinaisons = VetementFemme::where('category', 'Ensembles/Combinaisons')->paginate(8);
        return view('livewire.vet-femme.ensembles-combinaisons-component', ['ensembleCombinaisons' => $ensembleCombinaisons]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\VetementFemme;
use Livewire\Component;
use Livewire\WithPagination;

class VetementFemmeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $vetements_femme = VetementFemme::paginate(8);
        return view('livewire.vetement-femme-component', ['vetements_femme' => $vetements_femme]);
    }
}

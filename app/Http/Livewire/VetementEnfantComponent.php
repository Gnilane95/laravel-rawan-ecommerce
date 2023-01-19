<?php

namespace App\Http\Livewire;

use App\Models\VetementEnfant;
use Livewire\Component;
use Livewire\WithPagination;

class VetementEnfantComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $vetements_enfant = VetementEnfant::paginate(8);
        return view('livewire.vetement-enfant-component', ['vetements_enfant' => $vetements_enfant]);
    }
}

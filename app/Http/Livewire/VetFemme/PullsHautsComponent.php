<?php

namespace App\Http\Livewire\VetFemme;

use App\Models\VetementFemme;
use Livewire\Component;
use Livewire\WithPagination;

class PullsHautsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $pullHauts = VetementFemme::where('category' , 'Pulls/Hauts')->paginate(8);
        return view('livewire.vet-femme.pulls-hauts-component', ['pullHauts' => $pullHauts]);
    }
}

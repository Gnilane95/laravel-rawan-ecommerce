<?php

namespace App\Http\Livewire\VetFemme;

use App\Models\VetementFemme;
use Livewire\Component;
use Livewire\WithPagination;

class VestesManteauxComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $vesteManteaux = VetementFemme::where('category', 'Vestes/Manteaux')->paginate(8);
        return view('livewire.vet-femme.vestes-manteaux-component', ['vesteManteaux' => $vesteManteaux]);
    }
}

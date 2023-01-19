<?php

namespace App\Http\Livewire\VetFemme;

use App\Models\VetementFemme;
use Livewire\Component;
use Livewire\WithPagination;

class RobesJupesComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $robeJupes = VetementFemme::where('category' , 'Robes/Jupes')->paginate(8);
        return view('livewire.vet-femme.robes-jupes-component', ['robeJupes' => $robeJupes]);
    }
}

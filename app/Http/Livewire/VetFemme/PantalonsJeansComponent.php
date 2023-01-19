<?php

namespace App\Http\Livewire\VetFemme;

use App\Models\VetementFemme;
use Livewire\Component;
use Livewire\WithPagination;

class PantalonsJeansComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $pantalonJeans = VetementFemme::where('category','Pantalons/Jeans')->paginate(8);
        return view('livewire.vet-femme.pantalons-jeans-component', ['pantalonJeans' => $pantalonJeans]);
    }
}

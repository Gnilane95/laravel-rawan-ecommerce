<?php

namespace App\Http\Livewire\VetFemme;

use App\Models\VetementFemme;
use Livewire\Component;
use Livewire\WithPagination;

class AbayasFemmeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $abayasFemme = VetementFemme::where('category' , 'Abayas')->paginate(8);
        return view('livewire.vet-femme.abayas-femme-component', ['abayasFemme' => $abayasFemme]);
    }
}

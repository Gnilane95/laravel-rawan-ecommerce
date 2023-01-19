<?php

namespace App\Http\Livewire;

use App\Models\AbayaHomme;
use Livewire\Component;
use Livewire\WithPagination;

class AbayasHommeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $abayaHommes = AbayaHomme::paginate(8);
        return view('livewire.abayas-homme-component', ['abayaHommes' => $abayaHommes]);
    }
}

<?php

namespace App\Http\Livewire\Bijoux;

use App\Models\Bijou;
use Livewire\Component;
use Livewire\WithPagination;

class AciersInoxComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $aciersInox = Bijou::where('category', 'Aciers Inoxydables')->paginate(8);
        return view('livewire.bijoux.aciers-inox-component', ['aciersInox' => $aciersInox]);
    }
}

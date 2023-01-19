<?php

namespace App\Http\Livewire\Bijoux;

use App\Models\Bijou;
use Livewire\Component;
use Livewire\WithPagination;

class BijouxPersoComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $bijouPersos = Bijou::where('category', 'Bijoux Personalisés')->paginate(8);
        return view('livewire.bijoux.bijoux-perso-component', ['bijouPersos' => $bijouPersos]);
    }
}

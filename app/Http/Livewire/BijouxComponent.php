<?php

namespace App\Http\Livewire;

use App\Models\Bijou;
use Livewire\Component;
use Livewire\WithPagination;

class BijouxComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $bijoux = Bijou::paginate(8);
        return view('livewire.bijoux-component', ['bijoux'=> $bijoux]);
    }
}

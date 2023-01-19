<?php

namespace App\Http\Livewire\Bijoux;

use App\Models\Bijou;
use Livewire\Component;
use Livewire\WithPagination;

class ArgentsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $argents = Bijou::where('category', 'Argents')->paginate(8);
        return view('livewire.bijoux.argents-component', ['argents' => $argents]);
    }
}

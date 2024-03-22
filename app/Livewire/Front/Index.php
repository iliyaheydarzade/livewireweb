<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Index extends Component
{   
    #[Layout('components.layouts.front')] 
    public function render()
    {
        return view('livewire.front.index');
    }
}

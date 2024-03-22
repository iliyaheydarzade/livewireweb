<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;
class CoursIndex extends Component
{
    #[Layout('components.layouts.front')] 
    public function render()
    {
        return view('livewire.front.cours-index');
    }
}

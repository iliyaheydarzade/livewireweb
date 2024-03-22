<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;
class Courses extends Component
{
    #[Layout('components.layouts.front')] 
    public function render()
    {
        return view('livewire.front.courses');
    }
}

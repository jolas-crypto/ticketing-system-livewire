<?php

namespace App\Livewire;

use Livewire\Component;

class HeaderComponent extends Component
{
    public $activeItem = 'dashboard'; // Default active item

    public function setActiveItem($item)
    {
        $this->activeItem = $item;
    }
    
    public function render()
    {
        return view('livewire.header-component');
    }
}

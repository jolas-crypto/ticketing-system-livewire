<?php

namespace App\Livewire;

use Livewire\Component;

class TicketComponent extends Component
{
    public function render()
    {
        return view('livewire.ticket-component')
            ->layout('layouts.app');
    }
}

<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AssignedComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.assigned-component')
            ->layout('layouts.app');
    }
}

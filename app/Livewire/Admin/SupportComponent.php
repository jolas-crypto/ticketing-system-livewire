<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class SupportComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.support-component')
            ->layout('layouts.app');
    }
}

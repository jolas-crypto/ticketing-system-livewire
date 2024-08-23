<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class SettingComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.setting-component')
            ->layout('layouts.app');
    }
}

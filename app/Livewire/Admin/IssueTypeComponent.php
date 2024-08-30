<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class IssueTypeComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.issue-type-component')
            ->layout('layouts.app');
    }
}

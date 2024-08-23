<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class IssueClassificationComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.issue-classification-component')
            ->layout('layouts.app');
    }
}

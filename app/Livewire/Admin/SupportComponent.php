<?php

namespace App\Livewire\Admin;

use App\Models\SupportFor;
use Livewire\Component;
use Livewire\WithPagination;

class SupportComponent extends Component
{
    use WithPagination;

    public $tableHeaders = [
        'Code', 
        'Name', 
        'Description', 
        'Status'
    ];

    public $query = '';
 
    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        $supportFor = SupportFor::where('name', 'like', '%' . $this->query . '%')
        ->orWhere('description', 'like', '%' . $this->query . '%')
        ->paginate(5);

        return view('livewire.admin.support-component', [
            'supportLists' => $supportFor
        ])
        ->layout('layouts.app');
    }
}

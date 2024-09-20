<?php

namespace App\Livewire\Admin;

use App\Models\IssueType;
use Livewire\Component;
use Livewire\WithPagination;

class IssueTypeComponent extends Component
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
        $issueTypes = IssueType::where('name', 'like', '%' . $this->query . '%')
        ->orWhere('description', 'like', '%' . $this->query . '%')
        ->paginate(5);

        return view('livewire.admin.issue-type-component', [
            'issueTypes' => $issueTypes
        ])
        ->layout('layouts.app');
    }
}

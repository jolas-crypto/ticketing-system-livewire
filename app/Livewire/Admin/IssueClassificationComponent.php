<?php

namespace App\Livewire\Admin;

use App\Models\IssueClassification;
use Livewire\Component;
use Livewire\WithPagination;

class IssueClassificationComponent extends Component
{
    use WithPagination;
     
    public $issueClassification;
    
    public $tableHeaders = [
        'Code', 
        'Name', 
        'Description', 
        'Status'
    ];

    public function mount()
    {
        $this->issueClassification = IssueClassification::all();
    }

    public function render()
    {
        return view('livewire.admin.issue-classification-component', [
            'issueClassificationLists' => $this->issueClassification,
            'issueClassification' => IssueClassification::paginate(2),
        ])->layout('layouts.app');
    }
}

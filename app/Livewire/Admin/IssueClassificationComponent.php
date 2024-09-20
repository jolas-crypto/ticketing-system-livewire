<?php

namespace App\Livewire\Admin;

use App\Models\IssueClassification;
use Livewire\Component;
use Livewire\WithPagination;

class IssueClassificationComponent extends Component
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
        $issueClassification = IssueClassification::where('name', 'like', '%' . $this->query . '%')
        ->orWhere('description', 'like', '%' . $this->query . '%')
        ->paginate(10);

        return view('livewire.admin.issue-classification-component', [
            'issueClassification' => $issueClassification
        ])->layout('layouts.app');
    }
}

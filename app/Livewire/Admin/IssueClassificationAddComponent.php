<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\IssueClassificationSaveForm;
use Livewire\Component;

class IssueClassificationAddComponent extends Component
{
    public IssueClassificationSaveForm $issueClassificationSaveForm;

    public function save()
    {
        $this->issueClassificationSaveForm->store();
        
        session()->flash('status', 'Successfully Saved.');

        return redirect()->to('/issue-classification');
    }

    public function render()
    {
        return view('livewire.admin.issue-classification-add-component')
            ->layout('layouts.app');
    }
}

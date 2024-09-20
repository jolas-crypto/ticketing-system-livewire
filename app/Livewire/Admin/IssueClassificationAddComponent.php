<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\IssueClassificationSaveForm;
use App\Models\IssueClassification;
use Livewire\Component;

class IssueClassificationAddComponent extends Component
{
    public IssueClassificationSaveForm $issueClassificationSaveForm;

    public $issueClassificationId;

    public $issueClassitionData;

    public $status = [
        '' => '--Select an Option--',
        1 => 'Active',
        0 => 'In-Active'
    ];

    public function mount($id = null)
    {
        $this->issueClassitionData = IssueClassification::where('id', $id)->first();

        $this->issueClassificationId = $id;

        if ($this->issueClassitionData) {
            $this->issueClassificationSaveForm->code = $this->issueClassitionData->code;
            $this->issueClassificationSaveForm->name = $this->issueClassitionData->name;
            $this->issueClassificationSaveForm->description = $this->issueClassitionData->description;
            $this->issueClassificationSaveForm->status = $this->issueClassitionData->status;
        }
    }

    public function save()
    {
        if ($this->issueClassificationId) {
            $itemIssueClassification = IssueClassification::where('id', $this->issueClassificationId)->first();

            $itemIssueClassification->update([
                'code' => $this->issueClassificationSaveForm->code,
                'name' => $this->issueClassificationSaveForm->name,
                'description' => $this->issueClassificationSaveForm->description,
                'status' => $this->issueClassificationSaveForm->status
            ]);
        } else {
            $this->issueClassificationSaveForm->store();
        }
        
        session()->flash('status', 'Successfully Saved.');

        return redirect()->to('/issue-classification');
    }

    public function render()
    {
        return view('livewire.admin.issue-classification-add-component')
            ->layout('layouts.app');
    }
}

<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\IssueTypeSaveForm;
use App\Models\IssueType;
use Livewire\Component;

class IssueTypeAddComponent extends Component
{
    public IssueTypeSaveForm $issueTypeSaveForm;

    public $issueTypeId;

    public $issueTypeData;

    public $status = [
        '' => '--Select an Option--',
        1 => 'Active',
        0 => 'In-Active'
    ];

    public function mount($id = null)
    {
        $this->issueTypeData = IssueType::where('id', $id)->first();

        $this->issueTypeId = $id;

        if ($this->issueTypeData) {
            $this->issueTypeSaveForm->code = $this->issueTypeData->code;
            $this->issueTypeSaveForm->name = $this->issueTypeData->name;
            $this->issueTypeSaveForm->description = $this->issueTypeData->description;
            $this->issueTypeSaveForm->status = $this->issueTypeData->status;
        }
    }

    public function save()
    {
        if ($this->issueTypeId) {
            $itemIssueType = IssueType::where('id', $this->issueTypeId)->first();

            $itemIssueType->update([
                'code' => $this->issueTypeSaveForm->code,
                'name' => $this->issueTypeSaveForm->name,
                'description' => $this->issueTypeSaveForm->description,
                'status' => $this->issueTypeSaveForm->status
            ]);
        } else {
            $this->issueTypeSaveForm->store();
        }
        
        session()->flash('status', 'Successfully Saved.');

        return redirect()->to('/issue-type');
    }

    public function render()
    {
        return view('livewire.admin.issue-type-add-component')
        ->layout('layouts.app');
    }
}

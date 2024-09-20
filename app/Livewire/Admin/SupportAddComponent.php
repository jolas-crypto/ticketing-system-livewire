<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\SupportForSaveForm;
use App\Models\SupportFor;
use Livewire\Component;

class SupportAddComponent extends Component
{
    public SupportForSaveForm $supportForSaveForm;

    public $supportId;

    public $supportForData;
    
    public $status = [
        '' => '--Select an Option--',
        1 => 'Active',
        0 => 'In-Active'
    ];

    public function mount($id = null)
    {
        $this->supportForData = SupportFor::where('id', $id)->first();

        $this->supportId = $id;

        if ($this->supportForData) {
            $this->supportForSaveForm->code = $this->supportForData->code;
            $this->supportForSaveForm->name = $this->supportForData->name;
            $this->supportForSaveForm->description = $this->supportForData->description;
            $this->supportForSaveForm->status = $this->supportForData->status;
        }
    }

    public function save()
    {
        if ($this->supportId) {
            $itemSupportFor = SupportFor::where('id', $this->supportId)->first();

            $itemSupportFor->update([
                'code' => $this->supportForSaveForm->code,
                'name' => $this->supportForSaveForm->name,
                'description' => $this->supportForSaveForm->description,
                'status' => $this->supportForSaveForm->status
            ]);
        } else {
            $this->supportForSaveForm->store();
        }

        session()->flash('status', 'Successfully Saved.');

        return redirect()->to('/support');
    }

    public function render()
    {
        return view('livewire.admin.support-add-component')
            ->layout('layouts.app');
    }
}

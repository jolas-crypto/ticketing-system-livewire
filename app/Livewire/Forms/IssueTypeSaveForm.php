<?php

namespace App\Livewire\Forms;

use App\Models\IssueType;
use Livewire\Attributes\Validate;
use Livewire\Form;

class IssueTypeSaveForm extends Form
{
    #[Validate('required')]
    public $code = '';

    #[Validate('required')]
    public $name = '';

    public $description = '';

    #[Validate('required')]
    public $status = '';

    public function store()
    {
        $this->validate();

        IssueType::create([
            'code' => $this->code,
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->status,
            'created_by' => 1
        ]);
    }
}

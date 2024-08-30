<?php

namespace App\Livewire\Forms;

use App\Models\IssueClassification;
use Livewire\Attributes\Validate;
use Livewire\Form;

class IssueClassificationSaveForm extends Form
{
    #[Validate('required')]
    public $code = '';

    #[Validate('required')]
    public $name = '';

    public $description = '';

    public function store()
    {
        $this->validate();

        IssueClassification::create([
            'code' => $this->code,
            'name' => $this->name,
            'description' => $this->description,
            'created_by' => 1
        ]);
    }
}

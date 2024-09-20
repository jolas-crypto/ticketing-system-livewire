<?php

namespace App\Livewire\Forms;

use App\Models\SupportFor;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SupportForSaveForm extends Form
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

        SupportFor::create([
            'code' => $this->code,
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->status,
            'created_by' => 1
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterSaveForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterComponent extends Component
{
    use WithFileUploads;
    
    public RegisterSaveForm $registerSaveForm;

    public $type = [
        'Employee', 
        'Primary Support', 
        'Secondary Support', 
        'Immediate Superior'
    ];

    public function save()
    {
        $this->registerSaveForm->store();
        
        session()->flash('status', 'Successfully Saved.');

        return redirect()->to('/register');
    }

    public function render()
    {
        return view('livewire.register-component')
            ->layout('layouts.app');
    }
}

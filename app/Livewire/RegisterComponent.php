<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterSaveForm;
use App\Models\User;
use Livewire\Component;

class RegisterComponent extends Component
{
    public RegisterSaveForm $registerSaveForm;

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

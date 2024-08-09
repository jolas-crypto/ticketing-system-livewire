<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $first_name = '';
    public $last_name = '';
    public $email = '';

    public function save()
    {
        $validated = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email'
        ]);

        User::create($validated);

        session()->flash('status', 'Successfully Saved.');

        return redirect()->to('/register');
    }

    public function render()
    {
        return view('livewire.register-component')
            ->layout('layouts.app');
    }
}

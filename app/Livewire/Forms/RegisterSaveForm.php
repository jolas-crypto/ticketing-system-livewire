<?php

namespace App\Livewire\Forms;

use App\Models\Register;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterSaveForm extends Form
{
    #[Validate('required')]
    public $first_name = '';

    #[Validate('required')]
    public $last_name = '';

    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $street_address = '';

    #[Validate('required')]
    public $city = '';
    
    #[Validate('required')]
    public $state_province = '';
    
    #[Validate('required')]
    public $zip_code = '';

    public function store()
    {
        $this->validate();

        $user = User::create($this->only([
            'first_name',
            'last_name',
            'email'
        ]));

        Register::create([
            'user_id' => $user->id,
            'street_address' => $this->street_address,
            'city' => $this->city,
            'state_province' => $this->state_province,
            'zip_code' => $this->zip_code
        ]);


    }
}

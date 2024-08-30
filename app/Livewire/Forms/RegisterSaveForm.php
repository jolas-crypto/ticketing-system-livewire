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

    public $about = '';

    public $type = '';

    #[Validate('image|max:1024')]
    public $image_path;

    public function store()
    {
        $this->validate();

        $filePath = now()->format('Y/m/d');
        $filePath = 'imageUpload/' . $filePath;

        $filename = $this->image_path->store(path: $filePath);

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
            'zip_code' => $this->zip_code,
            'about' => $this->about,
            'type' => $this->type,
            'image_path' => $filename
        ]);
    }
}

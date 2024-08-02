<?php

namespace App\Livewire;

use Livewire\Component;

class LoginComponent extends Component
{
    public function render()
    {
        return view('livewire.login-component');
    }

    public function save()
    {
        dd('test');
        // Post::create([
        //     'title' => $this->title,
        //     'content' => $this->content,
        // ]);
 
        // return redirect()->to('/posts');
    }
}

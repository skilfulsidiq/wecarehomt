<?php

namespace App\Http\Livewire\Features\Auth\Pages;

use Livewire\Component;

class LoginPage extends Component
{

    public function login(){
        return redirect()->intended('/home');
    }
    public function render()
    {
        return view('livewire.features.auth.pages.login-page');
    }
}

<?php

namespace App\Http\Livewire\Features\Auth\Pages;

use Livewire\Component;

class LoginPage extends Component
{

    public function login(){
        // $credentials = $this->validate();
        // if (auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
        //     $user = Admin::where(['email' => $this->email])->first();
        //     auth()->login($user, $this->remember_me);
        //     return redirect()->intended('/dashboard');
        // } else {
        //     return $this->addError('email', trans('auth.failed'));
        // }
        return redirect()->intended('/home');
    }
    public function render()
    {
        return view('livewire.features.auth.pages.login-page');
    }
}

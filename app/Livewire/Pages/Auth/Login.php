<?php

namespace App\Livewire\Pages\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.auth')]
#[Title('Login')]
class Login extends Component
{
    #[Validate([
        'email' => 'required|email', 
        'password' => 'required|min:6'
    ])]
    public $email = '';
    public $password = '';

    public function login()
    {
        $this->validate();

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            session()->regenerate();
            return redirect()->intended('dashboard');
        }

        $this->addError('password', 'The provided credentials do not match our records.');
    }

    public function render()
    {
        return view('livewire.pages.auth.login');
    }
}

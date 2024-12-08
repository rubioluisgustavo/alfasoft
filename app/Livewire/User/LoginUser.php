<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class LoginUser extends Component
{
    #[Validate]
    public string $email = '';
    #[Validate]
    public string $password = '';

    public function mount() : void
    {
        if (Auth::check()) {
            $this->skipRender();
            $this->redirectRoute('index');
        }
    }

    public function rules() : array
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function login()
    {
        $validated = $this->validate();
        if (Auth::attempt($validated)) {
            session()->regenerate();
            return $this->redirectRoute('index');
        }
        session()->flash('error', 'Email or password wrong. Try again');
        $this->redirectRoute('account.login');
    }

    #[Title('Login')]
    public function render()
    {
        return view('livewire.user.login-user');
    }
}
<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public $user = '';

    public function mount()
    {
        if (Auth::check()) {
            $this->user = Auth::user()->name;
        }
    }

    public function createContact()
    {
        if (!auth()->check()) {
            return redirect()->route('account.login')->with('error', 'Please log in to create a new contact.');
        }

        return redirect()->route('contact.create');
    }

    public function logout()
    {
        session()->flush();
        $this->redirectRoute('account.login');
    }

    public function render()
    {
        return view('livewire.header');
    }
}
<?php

namespace App\Livewire\Contact;

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ShowContacts extends Component
{
    #[Computed]
    public function contacts()
    {
        return Contact::orderByDesc('created_at')->get();
    }

    public function edit($id)
    {
        if (!auth()->check()) {
            return redirect()->route('account.login')->with('error', 'Please log in to edit a contact.');
        }

        // Redirecione para a página de edição
        return redirect()->route('contact.edit', ['contact' => $id]);
    }

    public function delete(Contact $contact)
    {
        if (!Auth::check()) {
            return $this->redirectRoute('account.login');
        }
        $contact->delete();
    }

    public function render()
    {
        return view('livewire.contact.show-contacts');
    }
}

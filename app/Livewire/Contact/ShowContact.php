<?php

namespace App\Livewire\Contact;

use Livewire\Component;
use App\Models\Contact;

class ShowContact extends Component
{
    public Contact $contact;

    public function mount(Contact $contact) : void
    {
        $this->contact = $contact;
    }

    public function delete(Contact $contact) : void
    {
        $isDeleted = $contact->delete();
        if ($isDeleted) {
            session()->flash('status', 'Contact successfully deleted.');
        }
        $this->redirectRoute('index');
    }

    #[Title('Contact')]
    public function render()
    {
        return view('livewire.contact.show-contact');
    }
}
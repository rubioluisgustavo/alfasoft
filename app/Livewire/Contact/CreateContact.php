<?php

namespace App\Livewire\Contact;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Contact;
use App\Repositories\Eloquents\ContactRepository;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateContact extends Component
{
    #[Validate]
    public string $name = '';
    #[Validate]
    public string $contact = '';
    #[Validate]
    public string $email_address = '';

    public function rules(): array
    {
        return [
            'name' => 'bail|required|min:5|max:255',
            'email_address' => 'bail|required|email|unique:contacts',
            'contact' => 'required|digits:9|unique:contacts'
        ];
    }

    public function save(ContactRepository $repository): void
    {
        $validated = $this->validate();
        $contact = $repository->store($validated);
        $this->reset(['name', 'contact', 'email_address']);
        session()->flash('status', 'Contact successfully created.');
        $this->redirectRoute('index');
    }

    #[Title('Create')]
    public function render()
    {
        return view('livewire.contact.create-contact');
    }
}

<?php

namespace App\Livewire\Contact;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Contact;
use App\Repositories\Eloquents\ContactRepository;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;

class EditContact extends Component
{
    #[Validate]
    public string $name = '';
    #[Validate]
    public string $contact = '';
    #[Validate]
    public string $email_address = '';
    public Contact $contactModel;

    public function mount(Contact $contact) : void
    {
        if ($contact) {
            $this->contactModel = $contact;
            $this->fill(
                $contact->only('name', 'contact', 'email_address')
            );
        }
    }

    public function rules() : array
    {
        return [
            'name' => 'bail|required|min:5|max:255',
            'email_address' => 'bail|required|email|unique:contacts,email_address,'.$this->contactModel->id,
            'contact' => 'required|digits:9|regex:/^([0-9\s\-\+\(\)]*)$/|unique:contacts,contact,'.$this->contactModel->id
        ];
    }

    public function messages() : array
    {
        return [
            'contact.regex' => 'The field must be a valid phone number',
        ];
    }

    public function update(ContactRepository $repository) : void
    {
        $validated = $this->validate();
        $isUpdated = $repository->update($this->contactModel, $validated);
        if ($isUpdated) {
            session()->flash('status', 'Contact successfully updated.');
        }
        $this->redirectRoute('index');
    }

    #[Title('Edit')] 
    public function render()
    {
        return view('livewire.contact.edit-contact');
    }
}
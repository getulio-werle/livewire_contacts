<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\On;
use Livewire\Component;

class Contacts extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts = $this->getContacts();
    }
    
    #[On('contact-created')]
    public function updateContactsList()
    {
        $this->contacts = $this->getContacts();
    }

    public function render()
    {
        return view('livewire.contacts');
    }

    private function getContacts()
    {
        return Contact::all();
    }
}
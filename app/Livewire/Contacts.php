<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Contacts extends Component
{
    use WithPagination;
    
    #[On('contact-created')]
    public function updateContactsList()
    {}

    public function render()
    {
        return view('livewire.contacts')->with('contacts', Contact::paginate(3));
    }
}
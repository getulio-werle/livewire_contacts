<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|min:3|max:50')]
    public $name;

    #[Validate('required|email|min:5|max:50')]
    public $email;

    #[Validate('required|min:5|max:20')]
    public $phone;

    public $success = '';
    public $error = '';

    public function createContact()
    {
        // validation
        $this->validate();

        // store contact
        $result = Contact::firstOrCreate(
            [
                'name' => $this->name,
                'email' => $this->email
            ],
            [
                'phone' => $this->phone
            ]
        );

        
        // check for success or error
        if ($result->wasRecentlyCreated) {

            // clear form
            $this->reset();

            $this->success = 'Contact created successfully';

        } else {

            $this->error = 'The contact already exists';

        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

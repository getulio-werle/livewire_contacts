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

            // $this->success = 'Contact created successfully';

            // dispatch a event
            $this->dispatch('contact-created');

            $this->dispatch(
                'notification', 
                type: 'success',
                title: 'Contact created successfully',
                position: 'center'
            );
        } else {
            $this->dispatch(
                'notification', 
                type: 'error',
                title: 'The contact already exists',
                position: 'center'
            );
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

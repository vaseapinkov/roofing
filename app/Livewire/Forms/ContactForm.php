<?php

namespace App\Livewire\Forms;

use App\Models\VisitorMessage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate(['required'])]
    public $first_name = '';

    #[Validate(['required'])]
    public $last_name = '';

    #[Validate(['required', 'email', 'max:254'])]
    public $email = '';

    #[Validate(['required'])]
    public $phone = '';

    #[Validate(['required'])]
    public $subject = '';

    #[Validate(['required'])]
    public $address = '';

    #[Validate(['required'])]
    public $message = '';

    public function saveMessage(): void
    {
        VisitorMessage::create([
            'first_name' => !$this->first_name ? '-' : $this->first_name,
            'last_name' => !$this->last_name ? '-' : $this->last_name,
            'message' => !$this->message ? '-' : $this->message,
            'address' => !$this->address ? '-' : $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => '-',
        ]);

        $this->reset();
        session()->flash('status');
    }
}

<?php

namespace App\Livewire;

use App\Models\VisitorMessage;
use Livewire\Component;

class ContactUs extends Component
{
    public $firs_name;
    public $last_name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    public function render()
    {
        return view('livewire.contact-us');
    }

    public function saveMessage()
    {
        VisitorMessage::create([
            'firs_name' => $this->firs_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        $this->reset();
        session()->flash('status', 'Thank you! Your message has been sent successfully.');
    }
}

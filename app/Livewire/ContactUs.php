<?php

namespace App\Livewire;

use App\Models\Settings;
use App\Models\VisitorMessage;
use Illuminate\View\View;
use Livewire\Component;

class ContactUs extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public Settings $settings;

    public function mount(): void
    {
        $this->settings = Settings::first();
    }

    public function render(): View
    {
        $homePage = \App\Models\Page::getHomePage();

        return view('livewire.contact-us')
            ->layoutData([
                'title' => "Contact Us",
                'settings' => $this->settings,
                'navigationType' => "default",
                'metaImage' => $homePage->meta_image,
                'metaDescription' => $homePage->meta_description,
            ]);
    }

    public function saveMessage(): void
    {
        VisitorMessage::create([
            'first_name' => $this->first_name,
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

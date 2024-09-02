<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use App\Models\Settings;
use Illuminate\View\View;
use Livewire\Component;

class Services extends Component
{
    public ContactForm $form;

    public function render(): View
    {

        return view('livewire.services')->layoutData([
            'title' => 'Services',
            'settings' => Settings::first(),
            'navigationType' => 'default',
        ]);
    }

    public function save(): void
    {
        $this->form->saveMessage();
    }
}

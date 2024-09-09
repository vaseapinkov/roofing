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
        $homePage = \App\Models\Page::getHomePage();

        return view('livewire.services')->layoutData([
            'title' => 'Services',
            'settings' => Settings::first(),
            'navigationType' => 'default',
            'metaDescription' => $homePage->meta_description,
            'metaImage' => $homePage->meta_image,
        ]);
    }

    public function save(): void
    {
        $this->form->saveMessage();
    }
}

<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use App\Models\Service;
use App\Models\Settings;
use App\Models\VisitorMessage;
use App\Services\ContentTransformations\ContentTransformer;
use App\Services\ContentTransformations\ServicesTransformation;
use Illuminate\View\View;
use Livewire\Component;

class Services extends Component
{
    public ContactForm $form;

    public function render(): View
    {
        $services = Service::all()->toArray();

        $transformer = new ContentTransformer(new ServicesTransformation());
        $data = $transformer->transform($services);

        return view('livewire.services', [
            'services' => $data,
        ])->layoutData([
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

<?php

namespace App\Livewire;

use App\Models\Service;
use App\Models\Settings;
use Illuminate\View\View;
use Livewire\Component;

class ServicesDetails extends Component
{
    public Service $service;
    public $services;

    public function mount(Service $service): void
    {
        $this->service = $service;
        $this->services = Service::all();
    }

    public function render(): View
    {
        return view('livewire.services-details')
            ->layoutData([
                'title' => $this->service->name,
                'settings' => Settings::first(),
                'navigationType' => 'default',
                'metaImage' => $this->service->meta_image,
                'metaDescription' => $this->service->meta_description,
            ]);
    }
}

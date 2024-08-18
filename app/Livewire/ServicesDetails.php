<?php

namespace App\Livewire;

use App\Models\Service;
use Illuminate\View\View;
use Livewire\Component;

class ServicesDetails extends Component
{
    public $service;
    public $services;

    public function mount(Service $service): void
    {
        $this->service = $service;
        $this->services = Service::all();
    }

    public function render(): View
    {
        return view('livewire.services-details');
    }
}

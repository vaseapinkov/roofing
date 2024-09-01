<?php

namespace App\Livewire;

use App\Models\Service;
use App\Models\Settings;
use App\Models\VisitorMessage;
use App\Services\ContentTransformations\ContentTransformer;
use App\Services\ContentTransformations\ServicesTransformation;
use Illuminate\View\View;
use Livewire\Component;

class Services extends Component
{
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
            'navigationType' => 'default'
        ]);
    }

    public function saveMessage(): void
    {

        VisitorMessage::create([
            'first_name' => $this->first_name === null ?  '-' : $this->first_name,
            'last_name' => $this->last_name === null ?  '-' : $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => '-',
            'message' => $this->message === null ?  '-' : $this->message,
            'address' => $this->address === null ?  '-' : $this->address,
        ]);

        $this->reset();
        session()->flash('status', 'Thank you! Your message has been sent successfully.');

    }
}

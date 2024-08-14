<?php

namespace App\Livewire;

use App\Models\Feature;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\VisitorMessage;
use Illuminate\View\View;
use Livewire\Component;


class Home extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $message;
    public $address;

    public function render(): View
    {
        $features = Feature::where('show_on_home_page', true)->get();
        $services = Service::where('show_on_home_page', true)->get();
        $projects = Project::where('show_on_home_page', true)->get();
        $testimonials = Testimonial::where('show_on_home_page', true)->get();

        return view('livewire.home', [
            'features' => $features,
            'services' => $services,
            'projects' => $projects,
            'testimonials' => $testimonials,
        ])->title('M&R Roofing | A better roofing experience');
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

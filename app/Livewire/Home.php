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
    public $city;
    public $state;

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

    public function saveMessage()
    {

        VisitorMessage::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
        ]);

    }
}

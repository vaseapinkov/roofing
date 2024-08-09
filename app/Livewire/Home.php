<?php

namespace App\Livewire;

use App\Models\Feature;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\View\View;
use Livewire\Component;


class Home extends Component
{
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
}

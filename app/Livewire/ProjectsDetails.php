<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Service;
use App\Models\Settings;
use Illuminate\View\View;
use Livewire\Component;

class ProjectsDetails extends Component
{
    public Project $project;

    public function mount(Project $project): void
    {
        $this->project = $project;
    }

    public function render(): View
    {
        return view('livewire.projects-details', [
            'project' => $this->project,
            'services' => Service::all(),
        ])->layoutData([
            'settings' => Settings::first(),
            'title' => $this->project->name,
            'metaImage' => $this->project->meta_image,
            'metaDescription' => $this->project->meta_description,
            'navigationType' => 'default',
        ]);
    }
}

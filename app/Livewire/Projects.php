<?php

namespace App\Livewire;

use App\Models\Settings;
use Illuminate\View\View;
use Livewire\Component;

class Projects extends Component
{
    public function render(): View
    {
        return view('livewire.projects')
            ->layoutData([
                'title' => 'Projects',
                'settings' => Settings::first(),
                'navigationType' => 'default',
            ]);
    }
}

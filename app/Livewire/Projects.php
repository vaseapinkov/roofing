<?php

namespace App\Livewire;

use App\Models\Settings;
use Illuminate\View\View;
use Livewire\Component;

class Projects extends Component
{
    public function render(): View
    {
        $homePage = \App\Models\Page::getHomePage();

        return view('livewire.projects')
            ->layoutData([
                'title' => 'Projects',
                'settings' => Settings::first(),
                'navigationType' => 'default',
                'metaDescription' => $homePage->meta_description,
                'metaImage' => $homePage->meta_image,
            ]);
    }
}

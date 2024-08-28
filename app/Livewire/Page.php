<?php

namespace App\Livewire;

use App\Models\Settings;
use Illuminate\View\View;
use Livewire\Component;

class Page extends Component
{
    public $page;
    public $settings;

    public function mount(\App\Models\Page $page): void
    {
        $this->settings = Settings::first();
        $this->page = $page;
    }

    public function render(): View
    {
        return view('livewire.page')
            ->layoutData([
                'title' => $this->page->title,
                'settings' => $this->settings,
                'navigationType' => $this->page->navigation_type,
            ]);
    }
}

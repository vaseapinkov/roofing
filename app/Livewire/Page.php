<?php

namespace App\Livewire;

use App\Models\Settings;
use Illuminate\View\View;
use Livewire\Component;

class Page extends Component
{
    public \App\Models\Page $page;

    public function mount($page = null): void
    {
        $this->page = $page ?? \App\Models\Page::where('slug', 'home')->first();
    }

    public function render(): View
    {
        return view('livewire.page')
            ->layoutData([
                'title' => $this->page->meta_title,
                'settings' => Settings::first(),
                'navigationType' => $this->page->navigation_type,
            ]);
    }
}

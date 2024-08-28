<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Page extends Component
{
    public $page;

    public function mount(\App\Models\Page $page): void
    {
        $this->page = $page;
    }

    public function render(): View
    {
        return view('livewire.page')->layoutData([
            'navigationType' => $this->page->navigation_type,
        ]);
    }
}

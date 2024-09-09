<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use App\Models\Settings;
use Illuminate\View\View;
use Livewire\Component;
use App\Models\Page as PageModel;

class Page extends Component
{
    public PageModel $page;
    public ContactForm $form;

    public function mount($page = null): void
    {
        $this->page = $page ?? PageModel::where('slug', 'home')->first();
    }

    public function render(): View
    {
        return view('livewire.page')
            ->layoutData([
                'title' => $this->page->meta_title,
                'settings' => Settings::first(),
                'navigationType' => $this->page->navigation_type,
                'metaDescription' => $this->page->meta_description,
                'metaImage' => $this->page->meta_image,
            ]);
    }

    public function save(): void
    {
        $this->form->saveMessage();
    }
}

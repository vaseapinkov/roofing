<?php

use App\Livewire\ContactUs;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ContactUs::class)
        ->assertStatus(200);
});

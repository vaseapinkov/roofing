<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Home::class)->name('home');
Route::get('/contact-us', App\Livewire\ContactUs::class)->name('contact-us');
Route::get('/services', App\Livewire\Services::class)->name('services');

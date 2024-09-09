<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact-us', App\Livewire\ContactUs::class)->name('contact-us');

Route::get('/services', App\Livewire\Services::class)->name('services.index');
Route::get('/services/{service}', App\Livewire\ServicesDetails::class)->name('services.show');

Route::get('/projects', App\Livewire\Projects::class)->name('projects.index');
Route::get('/projects/{project}', App\Livewire\ProjectsDetails::class)->name('projects.show');

Route::get('/', App\Livewire\Page::class)->name('home');
Route::get('/{page}', App\Livewire\Page::class)->name('page');

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', App\Livewire\Home::class)->name('home');
Route::get('/contact-us', App\Livewire\ContactUs::class)->name('contact-us');

Route::get('/services', App\Livewire\Services::class)->name('services.index');
Route::get('/services/{service}', App\Livewire\ServicesDetails::class)->name('services.show');

Route::get('{page}', App\Livewire\Page::class)->name('page');

Route::get('/123/{test}', function (Request $request, string $test){
    $request->validate(['test' => 'email']);

    $josn = json_encode(['test' => $test]);

    return response()->json(null);
})->middleware('api');

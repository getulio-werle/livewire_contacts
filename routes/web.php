<?php

use App\Livewire\DeleteContact;
use App\Livewire\MainComponent;
use App\Livewire\UpdateContact;
use Illuminate\Support\Facades\Route;

Route::get('/', MainComponent::class)->name('home');
Route::get('/contacts/{id}/update', UpdateContact::class)->name('update-contact');
Route::get('/contacts/{id}/delete', DeleteContact::class)->name('delete-contact');
<?php

use App\Livewire\DashboardComponent;
use App\Livewire\LoginComponent;
use App\Livewire\RegisterComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', LoginComponent::class);
Route::get('dashboard', DashboardComponent::class)->name('dashboard');
Route::get('register', RegisterComponent::class)->name('register');

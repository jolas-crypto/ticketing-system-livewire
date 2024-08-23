<?php

use App\Livewire\Admin\AssignedComponent;
use App\Livewire\Admin\IssueClassificationComponent;
use App\Livewire\Admin\SettingComponent;
use App\Livewire\DashboardComponent;
use App\Livewire\LoginComponent;
use App\Livewire\RegisterComponent;
use App\Livewire\TicketComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', LoginComponent::class);
Route::get('dashboard', DashboardComponent::class)->name('dashboard');
Route::get('ticket-list', TicketComponent::class)->name('ticket-list');
Route::get('register', RegisterComponent::class)->name('register');
Route::get('setting', SettingComponent::class)->name('admin-setting');
Route::get('assigned', AssignedComponent::class)->name('admin-assigned');
Route::get('issue-classification', IssueClassificationComponent::class)->name('issue-classification');

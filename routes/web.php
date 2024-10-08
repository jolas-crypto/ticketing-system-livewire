<?php

use App\Livewire\Admin\AssignedComponent;
use App\Livewire\Admin\IssueClassificationAddComponent;
use App\Livewire\Admin\IssueClassificationComponent;
use App\Livewire\Admin\IssueTypeAddComponent;
use App\Livewire\Admin\IssueTypeComponent;
use App\Livewire\Admin\SettingComponent;
use App\Livewire\Admin\SupportAddComponent;
use App\Livewire\Admin\SupportComponent;
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
Route::get('issue-classification-add', IssueClassificationAddComponent::class)->name('add-issue-classification');
Route::get('issue-classification-add/{id}', IssueClassificationAddComponent::class)->name('show-issue-classification');
Route::get('support', SupportComponent::class)->name('support');
Route::get('support-add', SupportAddComponent::class)->name('add-support');
Route::get('support-add/{id}', SupportAddComponent::class)->name('show-support');
Route::get('issue-type', IssueTypeComponent::class)->name('issue-type');
Route::get('issue-type-add', IssueTypeAddComponent::class)->name('add-issue-type');
Route::get('issue-type-add/{id}', IssueTypeAddComponent::class)->name('show-issue-type');

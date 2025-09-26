<?php

use App\Livewire\Pages\Auth\Login;
use App\Livewire\Pages\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
})->name('/');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class)->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});
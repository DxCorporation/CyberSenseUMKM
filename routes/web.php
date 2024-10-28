<?php

use App\Livewire\LandingPage;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Notification;
use App\Livewire\Pages\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class)->name('landing');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/home', Home::class)->name('home');
    Route::get('/notifikasi', Notification::class)->name('notifikasi');
    Route::get('/profile/{user:username}', Profile::class)->name('profile');
});

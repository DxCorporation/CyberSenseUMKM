<?php

use App\Livewire\CekRisiko;
use App\Livewire\GejalaSolusi;
use App\Livewire\LandingPage;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Notification;
use App\Livewire\Pages\Profile;
use App\Livewire\Pengembang;
use App\Livewire\Petunjuk;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class)->name('landing');
Route::get('/cek-risiko', CekRisiko::class)->name('cek');
Route::get('/petunjuk', Petunjuk::class)->name('petunjuk');
Route::get('/pengembang', Pengembang::class)->name('pengembang');
Route::get('/gejala-solusi', GejalaSolusi::class)->name('gejala');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/home', Home::class)->name('home');
    Route::get('/notifikasi', Notification::class)->name('notifikasi');
    Route::get('/profile/{user:username}', Profile::class)->name('profile');
});

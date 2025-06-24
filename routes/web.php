<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\TransactionController;

Route::get('/transaction', [TransactionController::class, 'index'])
    ->name('transaction');

    Route::post('/withdraw', [TransactionController::class, 'withdraw'])
        ->name('withdraw');
    Route::post('/deposit', [TransactionController::class, 'deposit'])
        ->name('deposit');

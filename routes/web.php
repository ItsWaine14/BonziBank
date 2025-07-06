<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/about', 'about')->name('about');

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
use App\Http\Controllers\BillController;

Route::get('/transaction', [TransactionController::class, 'index'])
    ->name('transaction')->middleware('auth');

    Route::post('/withdraw', [TransactionController::class, 'withdraw'])
        ->name('withdraw')->middleware('auth');
    Route::post('/deposit', [TransactionController::class, 'deposit'])
        ->name('deposit')->middleware('auth');

Route::get('/balance', [TransactionController::class, 'balance'])
    ->name('balance')->middleware('auth');

Route::get('/transfer', [TransactionController::class, 'transferForm'])
    ->name('transferForm')->middleware('auth');

    Route::post('/transfer', [TransactionController::class, 'transfer'])
        ->name('transfer')->middleware('auth');

Route::get('/bill', [BillController::class, 'billForm'])
    ->name('billForm')->middleware('auth');

    Route::post('/bill', [BillController::class, 'pay'])
        ->name('pay')->middleware('auth');

Route::view('/card', 'card')->name('card');

Route::get('/currency', function () {
    return view('currency');
})->name('currency');

Route::get('/dashboard', [TransactionController::class, 'dashboardBalance'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'CompanySelectection')->name('home');
// Or: Route::view('/', 'welcome')->name('home');

// Fortify / auth routes
require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Legacy .html redirects (so old links still work)
|--------------------------------------------------------------------------
*/
Route::redirect('/driver/trips.html', '/driver/trips', 301);
Route::redirect('/driver/transactions.html', '/driver/transactions', 301);
Route::redirect('/driver/index.html', '/driver/dashboard', 301);
Route::redirect('/driver/dashboard.html', '/driver/dashboard', 301);
Route::redirect('/driver/login.html', '/driver/login', 301);

/*
|--------------------------------------------------------------------------
| Driver Routes (single 'web' guard)
|--------------------------------------------------------------------------
*/

// Login (reachable even if already authenticated)
Route::prefix('driver')->name('driver.')->group(function () {
    Route::get('/login', [App\Http\Controllers\Driver\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Driver\AuthController::class, 'login'])->name('login.submit');

    // Protected driver pages
    Route::middleware('auth')->group(function () {
        // Menu (dashboard)
        Route::view('/dashboard', 'driver.dashboard')->name('dashboard');

        // My Trips  -> resources/views/driver/trips/index.blade.php
        Route::view('/trips', 'driver.trips.index')->name('trips');

        // Transactions -> resources/views/driver/transactions/index.blade.php
        Route::view('/transactions', 'driver.transactions.index')->name('transactions');
    });
});

/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')->middleware(['verified'])->name('dashboard');

    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});


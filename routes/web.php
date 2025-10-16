<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
| The app starts on the main dashboard (Figma-based mobile view).
| The "Login" popup leads to the logged-in dashboard screen.
|
*/

Route::view('/', 'mobile.screens.dashboard')->name('dashboard');

Route::get('/dashboardlogged', function () {
    return view('mobile.screens.dashboardlogged');
})->name('dashboard.logged');

Route::get('/login', function () {
    return view('mobile.screens.login');
})->name('login');


/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
|
| These routes require authentication.
| Users must be logged in (and verified if needed).
|
*/

Route::middleware(['auth'])->group(function () {

    // Dashboard (protected)
    Route::view('/dashboard', 'dashboard')
        ->middleware(['verified'])
        ->name('dashboard');

    // Settings redirect
    Route::redirect('/settings', '/settings/profile');

    // Settings tabs (Volt)
    Volt::route('/settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('/settings/password', 'settings.password')->name('password.edit');
    Volt::route('/settings/appearance', 'settings.appearance')->name('appearance.edit');

    // Two-Factor Authentication (if enabled)
    Volt::route('/settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                []
            )
        )
        ->name('two-factor.show');
});


/*
|--------------------------------------------------------------------------
| Authentication Scaffolding (Fortify)
|--------------------------------------------------------------------------
|
| Handles login, registration, password reset, etc.
|
*/

require __DIR__ . '/auth.php';

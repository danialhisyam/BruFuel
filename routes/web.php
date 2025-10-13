<?php
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get('/', function () {
return view('dashboard');
})->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

// PUBLIC admin routes

});
// PROTECTED admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    //FOR LOGIN PAGE
    Route::view('/login', 'admin.login')->name('login');
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('/users', 'admin.manage-user')->name('users.index');
    Route::view('/orders', 'admin.manage-order')->name('order.index');

    Route::view('/drivers', 'admin.manage-drivers')->name('drivers.index');
    Route::view('/payments', 'admin.payment')->name('payments.index');
});

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

// Landing page (role selection portal)
Route::get('/', function () {
    return view('ComapnySelectection'); // your blade file e.g. resources/views/role-selection.blade.php
});

Route::prefix('testing')->name('testing.')->group(function () {
    Route::view('/testing', 'Testing.Test1');
});
    require __DIR__.'/auth.php';
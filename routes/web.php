<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portofolio_detail/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::get('/certificates', [\App\Http\Controllers\CertificateController::class, 'index'])->name('certificates.index');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    // Profile Settings
    Route::get('/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');

    // Experience, Expertise, Projects, Certificates
    Route::resource('experiences', \App\Http\Controllers\Admin\ExperienceController::class);
    Route::resource('expertises', \App\Http\Controllers\Admin\ExpertiseController::class);
    Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class);
    Route::resource('certificates', \App\Http\Controllers\Admin\CertificateController::class);

    // Account Settings
    Route::get('/settings', [\App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings/username', [\App\Http\Controllers\Admin\SettingsController::class, 'updateUsername'])->name('settings.username');
    Route::put('/settings/password', [\App\Http\Controllers\Admin\SettingsController::class, 'updatePassword'])->name('settings.password');
});

// Original Breeze Profile routes, redirect them to admin
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

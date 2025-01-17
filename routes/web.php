<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', App\Http\Controllers\WelcomeController::class);

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/customers', [App\Http\Controllers\DashboardController::class, 'customers']);
    Route::put('/customers/update', [App\Http\Controllers\DashboardController::class, 'update']);
    Route::resource('/profile', App\Http\Controllers\ProfileController::class);
});
Route::resource('/locations', App\Http\Controllers\LocationController::class);
require __DIR__.'/auth.php';

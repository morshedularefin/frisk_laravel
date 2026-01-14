<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminTestimonialController;

use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')
->prefix('admin')
->as('admin.')
->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth:admin')
->prefix('admin')
->as('admin.')
->group(function () {
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::middleware(['auth:admin', 'verified'])
->prefix('admin')
->as('admin.')
->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [AdminProfileController::class, 'index'])->name('profile');
    Route::post('profile', [AdminProfileController::class, 'edit'])->name('profile.edit');
    Route::get('testimonial/index', [AdminTestimonialController::class, 'index'])->name('testimonial.index');
    Route::post('testimonial/store', [AdminTestimonialController::class, 'store'])->name('testimonial.store');
    Route::post('testimonial/update/{id}', [AdminTestimonialController::class, 'update'])->name('testimonial.update');
    Route::post('testimonial/destroy/{id}', [AdminTestimonialController::class, 'destroy'])->name('testimonial.destroy');
});
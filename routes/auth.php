<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('signin', [AuthenticatedSessionController::class, 'create'])->name('signin');
    Route::post('signin', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('reset-password', [NewPasswordController::class, 'create'])->name('reset_password');
    Route::post('reset-password', [NewPasswordController::class, 'store']);

    Route::post('signout', [AuthenticatedSessionController::class, 'destroy'])->name('signout');
});

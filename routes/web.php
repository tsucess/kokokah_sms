<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Super Admin Routes
Route::prefix('superadmin')->name('superadmin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('superadmin.dashboard');
    })->name('dashboard');

    Route::get('/subscription', function () {
        return view('superadmin.subscription');
    })->name('subscription');

    Route::get('/schools', function () {
        return view('superadmin.schools');
    })->name('schools');

    Route::get('/users', function () {
        return view('superadmin.users');
    })->name('users');

    Route::get('/communication', function () {
        return view('superadmin.communication');
    })->name('communication');

    Route::get('/badges', function () {
        return view('superadmin.badges');
    })->name('badges');

    Route::get('/analytics', function () {
        return view('superadmin.analytics');
    })->name('analytics');

    Route::get('/modules', function () {
        return view('superadmin.modules');
    })->name('modules');

    Route::get('/settings', function () {
        return view('superadmin.settings');
    })->name('settings');
});

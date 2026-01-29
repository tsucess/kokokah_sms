<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BroadsheetController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\PasswordResetController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    // Registration
    Route::get('/register/school', [RegisterController::class, 'createSchool'])->name('register.school');
    Route::post('/register/school', [RegisterController::class, 'storeSchool']);
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    // Progressive Registration
    Route::get('/register-progressive', [RegisterController::class, 'createProgressive'])->name('register.progressive');
    Route::post('/register-progressive', [RegisterController::class, 'storeProgressive']);

    // Password Reset
    Route::get('/forgot-password', [PasswordResetController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class, 'store'])->name('password.email');
});

// Logout
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Super Admin Routes
Route::prefix('superadmin')->name('superadmin.')->group(function () {
// Route::prefix('superadmin')->name('superadmin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('superadmin.dashboard');
    })->name('dashboard');

    Route::get('/subscription', function () {
        return view('superadmin.subscription');
    })->name('subscription');

    Route::get('/schools', function () {
        return view('superadmin.schools');
    })->name('schools');

    Route::get('/starboard', function () {
        return view('superadmin.starboard');
    })->name('starboard');

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

// School Admin Routes
// Route::prefix('school')->name('school.')->middleware('auth')->group(function () {
Route::prefix('school')->name('school.')->group(function () {
    Route::get('/dashboard', function () {
        return view('school.dashboard');
    })->name('dashboard');

    Route::get('/students', function () {
        return view('school.students');
    })->name('students');

    Route::get('/staff', function () {
        return view('school.staff');
    })->name('staff');

    Route::get('/parents', function () {
        return view('school.parents');
    })->name('parents');

    Route::get('/fees', function () {
        return view('school.fees');
    })->name('fees');

    Route::get('/classes', function () {
        return view('school.classes');
    })->name('classes');

    Route::get('/messaging', function () {
        return view('school.messaging');
    })->name('messaging');

    Route::get('/timetable', function () {
        return view('school.timetable');
    })->name('timetable');

    Route::get('/broadsheet', [BroadsheetController::class, 'index'])->name('broadsheet');

    Route::get('/lesson-plan', function () {
        return view('school.lesson-plan');
    })->name('lesson-plan');

    Route::get('/expenses', function () {
        return view('school.expenses');
    })->name('expenses');

    Route::get('/inventory', function () {
        return view('school.inventory');
    })->name('inventory');

    Route::get('/configuration', function () {
        return view('school.configuration');
    })->name('configuration');

    Route::get('/configuration/term-definitions', function () {
        return view('school.configuration-term-definitions');
    })->name('configuration.term-definitions');

    Route::get('/configuration/session/{id}', function ($id) {
        return view('school.configuration-session');
    })->name('configuration.session');

    Route::get('/settings', function () {
        return view('school.settings');
    })->name('settings');
});

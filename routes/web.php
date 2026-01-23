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

    Route::get('/broadsheet', function () {
        return view('school.broadsheet');
    })->name('broadsheet');

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

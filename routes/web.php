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

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/students', function () {
        return view('admin.students.index');
    })->name('students');

    Route::get('/students/bio-data', function () {
        return view('admin.students.bio-data');
    })->name('students.bio-data');

    Route::get('/students/profile', function () {
        return view('admin.students.profile');
    })->name('students.profile');

    Route::get('/staff', function () {
        return view('admin.staff.index');
    })->name('staff');

    Route::get('/staff/bio-data', function () {
        return view('admin.staff.bio-data');
    })->name('staff.bio-data');

    Route::get('/parents', function () {
        return view('admin.parents.index');
    })->name('parents');

    Route::get('/parents/add', function () {
        return view('admin.parents.add-parent');
    })->name('parents.add');

    Route::get('/parents/profile', function () {
        return view('admin.parents.profile');
    })->name('parents.profile');

    Route::get('/fees', function () {
        return view('admin.fees.index');
    })->name('fees');

    Route::get('/classes', function () {
        return view('admin.classes.index');
    })->name('classes');

    Route::get('/classes/attendance', function () {
        return view('admin.classes.attendance');
    })->name('classes.attendance');

    Route::get('/classes/subjects', function () {
        return view('admin.classes.subjects');
    })->name('classes.subjects');

    Route::get('/messaging', function () {
        return view('admin.messaging');
    })->name('messaging');

    Route::get('/timetable', function () {
        return view('admin.timetable.index');
    })->name('timetable');

    Route::get('/broadsheet', function () {
        return view('admin.broadsheet.index');
    })->name('broadsheet');

    Route::get('/lesson-plan', function () {
        return view('admin.lesson-plan.index');
    })->name('lesson-plan');

    Route::get('/expenses', function () {
        return view('admin.expenses.index');
    })->name('expenses');

    Route::get('/expenses/create', function () {
        return view('admin.expenses.create');
    })->name('expenses.create');

    Route::get('/inventory', function () {
        return view('admin.inventory.index');
    })->name('inventory');

    Route::get('/login-history', function () {
        return view('admin.login-history');
    })->name('login-history');

    Route::get('/starboard', function () {
        return view('admin.starboard');
    })->name('starboard');

    Route::get('/messaging/inbox', function () {
        return view('admin.messaging.inbox');
    })->name('messaging.inbox');

    Route::get('/messaging/messages', function () {
        return view('admin.messaging.messages');
    })->name('messaging.messages');

    Route::get('/classes/members', function () {
        return view('admin.classes.members');
    })->name('classes.members');

    Route::get('/students/payment-history', function () {
        return view('admin.students.payment-history');
    })->name('students.payment-history');

    Route::get('/students/next-of-kin', function () {
        return view('admin.students.next-of-kin');
    })->name('students.next-of-kin');

    Route::get('/parents/management', function () {
        return view('admin.parents.management');
    })->name('parents.management');

    Route::get('/parents/link-children', function () {
        return view('admin.parents.link-children');
    })->name('parents.link-children');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');

    // Configuration Routes
    Route::get('/configuration', function () {
        return view('admin.configuration.index');
    })->name('configuration');

    Route::get('/configuration/sessions', function () {
        return view('admin.configuration.sessions');
    })->name('configuration.sessions');

    Route::get('/configuration/academic-sessions', function () {
        return view('admin.configuration.academic-sessions');
    })->name('configuration.academic-sessions');

    Route::get('/configuration/class-arms', function () {
        return view('admin.configuration.class-arms');
    })->name('configuration.class-arms');
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

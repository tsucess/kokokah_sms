<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API Routes for School Management System
// Uncomment and implement controllers as needed
/*
Route::prefix('v1')->group(function () {
    // Students Routes
    Route::apiResource('students', App\Http\Controllers\Api\StudentController::class);

    // Teachers Routes
    Route::apiResource('teachers', App\Http\Controllers\Api\TeacherController::class);

    // Classes Routes
    Route::apiResource('classes', App\Http\Controllers\Api\ClassController::class);

    // Subjects Routes
    Route::apiResource('subjects', App\Http\Controllers\Api\SubjectController::class);

    // Attendance Routes
    Route::apiResource('attendance', App\Http\Controllers\Api\AttendanceController::class);

    // Grades Routes
    Route::apiResource('grades', App\Http\Controllers\Api\GradeController::class);
});
*/


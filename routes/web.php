<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Teacher;

use SebastianBergmann\CodeCoverage\Report\Xml\Report;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/students',StudentController::class);
Route::resource('/teachers',TeacherController::class);
Route::resource('/courses',CourseController::class);
Route::resource('/batches',BatchController::class);
Route::resource('/enrollments',EnrollmentController::class);
Route::resource('/payments',PaymentController::class);
Route::get('report/report1/{pid}', [ReportController::class, 'report1']);


// for students
// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/create', [StudentController::class, 'create']);
// Route::post('/students', [StudentController::class, 'store']);
// Route::get('/students/{student}', [StudentController::class, 'show']);
// Route::get('/students/{student}/edit', [StudentController::class, 'edit']);
// Route::patch('/students/{id}', [StudentController::class, 'update']);
// Route::delete('/students/{id}', [StudentController::class, 'destroy']);

// for teachers

// Route::get('/teachers', [TeacherController::class, 'index']);
// Route::get('/teachers/create', [TeacherController::class, 'create']);
// Route::post('/teachers', [TeacherController::class, 'store']);
// Route::get('/teachers/{teacher}', [TeacherController::class, 'show']);
// Route::get('/teachers/{teacher}/edit', [TeacherController::class, 'edit']);
// Route::patch('/teachers/{id}', [TeacherController::class, 'update']);
// Route::delete('/teachers/{id}', [TeacherController::class, 'destroy']);

// for courses

// Route::get('/courses', [CourseController::class, 'index']);
// Route::get('/courses/create', [CourseController::class, 'create']);
// Route::post('/courses', [CourseController::class, 'store']);
// Route::get('/courses/{teacher}', [CourseController::class, 'show']);
// Route::get('/courses/{teacher}/edit', [CourseController::class, 'edit']);
// Route::patch('/courses/{id}', [CourseController::class, 'update']);
// Route::delete('/courses/{id}', [CourseController::class, 'destroy']);


<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\QuestionController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\AdminController;

Route::get('/', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login'])->middleware('login');
Route::post('/login', [LoginController::class, 'loginProcess'])->name('login-progress');

Route::middleware(['authmiddleware'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->middleware('superadmin')->name('admin');
    Route::post('/className', [AdminController::class, 'class_name'])->name('class-name');
    Route::post('/filter/datas', [AdminController::class, 'filter_datas'])->name('filters');
    Route::post('getsubjects/subjects', [AdminController::class, 'getSubjects']);

    Route::get('/', [ExamController::class, 'showExampage']);
    Route::get('/exam', [ExamController::class, 'showExampage'])->name('exam-student');
    Route::get('subjects/{id}', [SubjectsController::class, 'getSubjects']);
    Route::any('questions', [QuestionController::class, 'getQustions'])->name('question');
    Route::post('verify', [QuestionController::class, 'verification'])->name('verify');
    Route::get('email', [EmailController::class, 'emailsent'])->name('email');
    Route::get('finish', [EmailController::class, 'complete'])->name('finish-exam');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

// Route::get('/user', [LoginController::class, 'getAllUsers']);
// Route::post('/insert', function () {
//     dd("hello");
// });
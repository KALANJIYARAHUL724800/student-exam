<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResultController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\PdfGeneratorController;
// Route::post('/login', [AuthController::class, 'login']);
Route::post('/token', [AuthController::class, 'staticApiKey']);

Route::middleware(['jwt'])->group(function () {
    Route::post('get', [ResultController::class, 'getResults']);
    Route::post('/xl', [ResultController::class, 'export']);
    Route::post('/pdf', [PdfGeneratorController::class, 'pdfGenerate']); 
});


































// Route::post('/insert', [LoginController::class, 'insertUser']);
// Route::get('/selectall', [LoginController::class, 'getAllUsers']);
// Route::post('/selectone', [LoginController::class, 'getUserById']);
// Route::put('/update', [LoginController::class, 'updateUser']);
// Route::delete('/delete', [LoginController::class, 'deleteUser']);
// Route::patch('/update-one/{id}', [LoginController::class, 'updateOneUser']);
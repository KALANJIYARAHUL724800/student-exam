<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Http;

Route::post('/insert', [LoginController::class, 'insertUser']);
Route::get('/selectall', [LoginController::class, 'getAllUsers']);
Route::post('/selectone', [LoginController::class, 'getUserById']);
Route::put('/update', [LoginController::class, 'updateUser']);
Route::delete('/delete', [LoginController::class, 'deleteUser']);
Route::patch('/update-one/{id}', [LoginController::class, 'updateOneUser']);

//Route::get('test-api', [LoginController::class, 'test_api'])->name('api.test');

// jwt authentication routes
// Route::get('/', function () {
//     return response()->json(['message' => 'Hello world!']);
// });

// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('jwt')->group(function () {
//     Route::get('/user', [AuthController::class, 'getUser']);
//     Route::put('/user', [AuthController::class, 'updateUser']);
//     Route::post('/logout', [AuthController::class, 'logout']);
// });

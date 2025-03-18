<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('register/', [AuthController::class, 'register']);
Route::post('register/', [AuthController::class, 'profile_setting']);
Route::get('/mypage/profile', [AuthController::class, 'show_profile_setting']);
Route::get('/', [AuthController::class, 'index']);

Route::middleware('auth')->group(function () {
   
    Route::post('/', [AuthController::class, 'index']);
    //Route::post('/register', [AuthController::class, 'profile_setting']);
    //Route::get('/mypage/profile', [AuthController::class, 'show_profile']);
});


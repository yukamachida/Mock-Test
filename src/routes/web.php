<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('register/', [AuthController::class, 'showRegisterForm']);
Route::post('register/', [AuthController::class, 'register']);
Route::get('login/', [AuthController::class, 'showlogin']);
Route::post('login/', [AuthController::class, 'login']);
Route::get('/mypage/profile', [AuthController::class, 'showProfileSetting']);
Route::post('firstlogin/', [AuthController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/', [ProductController::class, 'index']);

});


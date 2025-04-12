<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

Route::get('register/', [AuthController::class, 'showRegisterForm']);
Route::post('register/', [AuthController::class, 'register']);
Route::get('login/', [AuthController::class, 'showlogin']);
Route::post('login/', [AuthController::class, 'login']);
Route::get('/firstlogin', [AuthController::class, 'showProfileSetting']);
Route::post('/firstlogin', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/mypage/profile', [ProfileController::class, 'edit']);
Route::post('/mypage/profile', [ProfileController::class, 'update']);
Route::get('/mypage', [ItemController::class, 'showMypage']);
Route::get('/item/{id}', [ItemController::class, 'detail']);
Route::get('/purchase/{id}', [ItemController::class, 'purchase']);


Route::middleware('auth')->group(function () {
    Route::get('/', [ItemController::class, 'index']);
    Route::post('/like', [LikeController::class, 'store']);
    Route::delete('/like/{id}', [LikeController::class, 'destroy']);
    Route::post('/comment', [CommentController::class, 'store']);
});


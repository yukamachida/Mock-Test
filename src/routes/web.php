<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;

Route::get('register/', [AuthController::class, 'showRegisterForm']);
Route::post('register/', [AuthController::class, 'register']);
Route::get('login/', [AuthController::class, 'showlogin']);
Route::post('login/', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/', [ProductController::class, 'index']);
Route::get('/item/{id}', [ProductController::class, 'detail']);


Route::middleware('auth')->group(function () {

   
    Route::post('/comment', [CommentController::class, 'store']);
    Route::get('/firstlogin', [AuthController::class, 'showProfileSetting']);
    Route::post('/firstlogin', [AuthController::class, 'store']);
    Route::get('/mypage/profile', [ProfileController::class, 'edit']);
    Route::post('/mypage/profile', [ProfileController::class, 'update']);
    Route::get('/mypage', [ProfileController::class, 'showMypage']);

    Route::get('/purchase/{id}', [ProductController::class, 'purchaseForm']);
    Route::post('/purchase/{id}', [ProductController::class, 'purchase']);
    Route::get('/sell', [ProductController::class, 'create']);
    Route::post('/sell', [ProductController::class, 'store']);
    Route::get('/change', [ProfileController::class, 'change']);
    Route::post('/change/address', [ProfileController::class, 'changeAddress']);
});


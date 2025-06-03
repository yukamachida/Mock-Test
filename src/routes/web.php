<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Models\Purchase;
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
Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/item/{id}', [ProductController::class, 'detail']);


Route::middleware('auth')->group(function () {

   
    Route::post('/comment', [CommentController::class, 'store']);
    Route::get('/firstlogin', [AuthController::class, 'showProfileSetting']);
    Route::post('/firstlogin', [AuthController::class, 'store']);
    Route::get('/mypage/profile', [ProfileController::class, 'edit']);
    Route::post('/mypage/profile', [ProfileController::class, 'update']);
    Route::get('/mypage', [ProfileController::class, 'showMypage']);

    Route::get('/purchase/{id}', [PurchaseController::class, 'show']);
    Route::post('/purchase/{id}', [PurchaseController::class, 'store']);
    Route::get('/sell', [ProductController::class, 'create']);
    Route::post('/sell', [ProductController::class, 'store']);
    Route::get('/change', [ProfileController::class, 'change']);
    Route::post('/purchase/address/{id}', [ProfileController::class, 'changeAddress']);
});


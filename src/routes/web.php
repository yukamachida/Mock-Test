<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/mypage/profile', [AuthController::class, 'show_profile']);

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
    Route::post('/', [AuthController::class, 'index']);
    //Route::post('/register', [AuthController::class, 'profile_setting']);
    //Route::get('/mypage/profile', [AuthController::class, 'show_profile']);
});


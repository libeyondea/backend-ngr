<?php

use App\Http\Controllers\AdviseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/auth/signin', [AuthController::class, 'signin']);
//Route::post('/auth/signup', [AuthController::class, 'signup']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/auth/me', [AuthController::class, 'me']);
    Route::post('/auth/signout', [AuthController::class, 'signout']);

    Route::get('/profile', [ProfileController::class, 'show']);
    Route::put('/profile', [ProfileController::class, 'update']);

    Route::get('/users', [UserController::class, 'index'])->middleware('role:owner');
    Route::get('/users/{id}', [UserController::class, 'show'])->middleware('role:owner');
    Route::post('/users', [UserController::class, 'store'])->middleware('role:owner');
    Route::put('/users/{id}', [UserController::class, 'update'])->middleware('role:owner');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->middleware('role:owner');

    Route::post('/images/upload', [ImageController::class, 'upload']);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/feedback', [FeedbackController::class, 'index']);

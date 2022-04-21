<?php

use App\Http\Controllers\Admin\AdviseController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\TagController;
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

	Route::post('/images/upload', [ImageController::class, 'upload']);

	Route::get('/profile', [ProfileController::class, 'show']);
	Route::put('/profile', [ProfileController::class, 'update']);

	Route::get('/users', [UserController::class, 'index'])->middleware('role:owner');
	Route::get('/users/{id}', [UserController::class, 'show'])->middleware('role:owner');
	Route::post('/users', [UserController::class, 'store'])->middleware('role:owner');
	Route::put('/users/{id}', [UserController::class, 'update'])->middleware('role:owner');
	Route::delete('/users/{id}', [UserController::class, 'destroy'])->middleware('role:owner');


	Route::get('/posts', [PostController::class, 'index']);
	Route::get('/posts/{id}', [PostController::class, 'show']);
	Route::post('/posts', [PostController::class, 'store']);
	Route::put('/posts/{id}', [PostController::class, 'update']);
	Route::delete('/posts/{id}', [PostController::class, 'destroy']);

	Route::get('/categories', [CategoryController::class, 'index']);
	Route::get('/categories/{id}', [CategoryController::class, 'show']);
	Route::post('/categories', [CategoryController::class, 'store']);
	Route::put('/categories/{id}', [CategoryController::class, 'update']);
	Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

	Route::get('/tags', [TagController::class, 'index']);
	Route::get('/tags/{id}', [TagController::class, 'show']);
	Route::post('/tags', [TagController::class, 'store']);
	Route::put('/tags/{id}', [TagController::class, 'update']);
	Route::delete('/tags/{id}', [TagController::class, 'destroy']);

	Route::get('/advises', [AdviseController::class, 'index']);
	Route::delete('/advises/{id}', [AdviseController::class, 'destroy']);

	Route::get('/feedback', [FeedbackController::class, 'index']);
	Route::get('/feedback/{id}', [FeedbackController::class, 'show']);
	Route::post('/feedback', [FeedbackController::class, 'store']);
	Route::put('/feedback/{id}', [FeedbackController::class, 'update']);
	Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy']);
});

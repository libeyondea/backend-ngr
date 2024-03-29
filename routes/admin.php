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

	Route::get('/posts', [PostController::class, 'index'])->middleware('role:owner|admin|moderator|viewer');
	Route::get('/posts/{id}', [PostController::class, 'show'])->middleware('role:owner|admin|moderatorv');
	Route::post('/posts', [PostController::class, 'store'])->middleware('role:owner|admin|moderator');
	Route::put('/posts/{id}', [PostController::class, 'update'])->middleware('role:owner|admin');
	Route::delete('/posts/{id}', [PostController::class, 'destroy'])->middleware('role:owner');

	Route::get('/categories', [CategoryController::class, 'index'])->middleware('role:owner|admin|moderator|viewer');
	Route::get('/categories/{id}', [CategoryController::class, 'show'])->middleware('role:owner|admin|moderator|viewer');
	Route::post('/categories', [CategoryController::class, 'store'])->middleware('role:owner|admin|moderator');
	Route::put('/categories/{id}', [CategoryController::class, 'update'])->middleware('role:owner|admin');
	Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->middleware('role:owner');

	Route::get('/tags', [TagController::class, 'index'])->middleware('role:owner|admin|moderator|viewer');
	Route::get('/tags/{id}', [TagController::class, 'show'])->middleware('role:owner|admin|moderator|viewer');
	Route::post('/tags', [TagController::class, 'store'])->middleware('role:owner|admin|moderator');
	Route::put('/tags/{id}', [TagController::class, 'update'])->middleware('role:owner|admin');
	Route::delete('/tags/{id}', [TagController::class, 'destroy'])->middleware('role:owner');

	Route::get('/advises', [AdviseController::class, 'index'])->middleware('role:owner|admin|moderator|viewer');
	Route::get('/advises/{id}', [AdviseController::class, 'show'])->middleware('role:owner|admin|moderator|viewer');
	Route::put('/advises/{id}', [AdviseController::class, 'update'])->middleware('role:owner|admin');
	Route::delete('/advises/{id}', [AdviseController::class, 'destroy'])->middleware('role:owner');

	Route::get('/feedback', [FeedbackController::class, 'index'])->middleware('role:owner|admin|moderator|viewer');
	Route::get('/feedback/{id}', [FeedbackController::class, 'show'])->middleware('role:owner|admin|moderator|viewer');
	Route::post('/feedback', [FeedbackController::class, 'store'])->middleware('role:owner|admin|moderator');
	Route::put('/feedback/{id}', [FeedbackController::class, 'update'])->middleware('role:owner|admin');
	Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy'])->middleware('role:owner');
});

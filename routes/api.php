<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\EmailVerificationController;
use App\Http\Controllers\Api\GenresController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('genres', GenresController::class);
Route::apiResource('user', UserController::class);
Route::post('login', [UserController::class, 'login']);

//USER CHANGE PASSWORD
// Route::post('/change-password/{user}', [UserController::class,'changePassword'])->middleware('auth:sanctum')->name('change-password');
// Route::get('/change-password/{user}/edit', [UserController::class,'edit'])->middleware('auth:sanctum');

//EMAIL VERIFICATION
Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail'])->middleware('auth:sanctum');
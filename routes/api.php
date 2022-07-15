<?php

use App\Http\Controllers\Api\GenresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\EmailVerificationController;

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
Route::post('/change-password', [UserController::class,'changePassword'])->middleware('auth:sanctum');

//EMAIL VERIFICATION
Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail'])->middleware('auth:sanctum');
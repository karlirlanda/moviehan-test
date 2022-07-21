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

// // Video Controller
// Route::post('/admin/videos', [AdminVideoController::class, 'store'])->name('store');
// Route::get('/admin/videos/create', [AdminVideoController::class, 'create'])->name('create');
// Route::put('/videos/{id}', [AdminVideoController::class, 'update']);
// Route::get('/videos', [AdminVideoController::class, 'all'])->name('all');
// Route::get('/videos/{id}', [AdminVideoController::class, 'show']);
// Route::delete('/videos/{id}', [AdminVideoController::class, 'destroy']);

// // Stream Controller
// Route::post('/admin/streams', [AdminStreamController::class, 'store'])->name('streamstore');
// Route::get('/admin/streams/create', [AdminStreamController::class, 'create'])->name('streamcreate');
// Route::put('/streams/{id}', [AdminStreamController::class, 'update']);
// Route::get('/streams', [AdminStreamController::class, 'all'])->name('allstream');
// Route::get('/streams/{id}', [AdminStreamController::class, 'show']);
// Route::delete('/streams/{id}', [AdminStreamController::class, 'destroy']);

// //Admin  User Control
// Route::get('/admin/user', [AdminUserController::class, 'user_preferences'])->name('user_preferences');



// //Video Controller
// Route::get('/video/view/{id}', [VideoController::class, 'get_url'])->name('video_url');
// Route::get('/video/active', [VideoController::class, 'active_videos'])->name('all_active');
// Route::get('/video/inactive', [VideoController::class, 'inactive_videos'])->name('all_inactive');

// //get strean url
// Route::get('/stream/view/{id}', [StreamController::class, 'stream_url'])->name('stream_url');


// //Route for user Preference 
// Route::post('/user/registration/preference', [UserPreferenceController::class, 'store'])->name('user_preference');

// //change status stream
// Route::post('/streams/status', [AdminStreamController::class, 'changeStatus'])->name('changeStatus_stream');

// //change status videos
// Route::post('/videos/status', [AdminVideoController::class, 'changeStatus'])->name('changeStatus_videos');
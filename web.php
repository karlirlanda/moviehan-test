<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\NotifController;
use Illuminate\Support\Facades\Authenticate;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->middleware(['auth','verified','user'])->group(function()
{
    Route::get('/dashboard', function (){
        return view('/user/dashboard');
    })->name('dashboard');

    Route::get('/account-settings', function (){
        return view('/user/account-settings');
    })->name('user-settings');

    Route::get('/video-player', function (){
        return view('/user/video-player');
    })->name('video-player');

});

Route::prefix('admin')->middleware(['auth','verified','admin'])->group(function()
{
    Route::get('/account-settings', function (){
        return view('/admin/account-settings');
    })->name('account-settings');

    Route::get('/movie-control', function (){
        return view('/admin/movie-control');
    })->name('movie-control');

    Route::get('/stream-control', function (){
        return view('/admin/stream-control');
    })->name('stream-control');

    Route::get('/user-control', function (){
        return view('/admin/user-control');
    })->name('user-control');
});

Route::get('send', [NotifController::class,"sendnotification"]);

// Route::post('/change-password', [UserController::class,'changePassword'])->middleware('auth:sanctum')->name('change-password');
// Route::get('/change-password/{id}/edit', [UserController::class,'edit'])->middleware('auth:sanctum')->name('user-edit');


require __DIR__.'/auth.php';

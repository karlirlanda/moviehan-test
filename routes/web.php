<?php

use Illuminate\Support\Facades\Route;
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
});

Route::prefix('admin')->middleware(['auth','verified','admin'])->group(function()
{
    Route::get('/dashboard', function (){
        return view('/admin/dashboard');
    })->name('admin');
});

require __DIR__.'/auth.php';

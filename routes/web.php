<?php

use Illuminate\Support\Facades\Route;

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

// //USER PAGE
// Route::middleware(['auth','verified'])->get('/dashboard', function () {
//     return view('dashboard');
// });

// //ADMIN PAGE
// Route::middleware(['auth','verified'])->get('/admin', function () {
//     return view('admin');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth','verified'])->name('admin');

require __DIR__.'/auth.php';

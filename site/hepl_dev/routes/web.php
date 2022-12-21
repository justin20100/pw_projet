<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
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
// Home
Route::get('{locale?}/', function () {
    return view('index');
});

// Profile
Route::middleware('auth')->group(function () {
    Route::get('{locale?}/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('{locale?}/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('{locale?}/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Dashboard
Route::get('{locale?}/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// login
Route::get('{locale?}/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('{locale?}/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
// logout
Route::post('{locale?}/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');
// Register
Route::get('{locale?}/register',[RegisteredUserController::class, 'create'])->name('register')->middleware('guest');
Route::post('{locale?}/register',[RegisteredUserController::class,'store'])->middleware('guest');



// Global pages
Route::get('{locale?}/contact', function () {
    return view('contact');
})->name('contact');

Route::get('{locale?}/emploie', function () {
    return view('emploie');
})->name('emploie');

Route::get('{locale?}/forum', function () {
    return view('forum');
})->name('forum');

Route::get('{locale?}/news', function () {
    return view('news');
})->name('news');

Route::get('{locale?}/section', function () {
    return view('section');
})->name('section');

require __DIR__.'/auth.php';

<?php

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

Route::get('{locale?}/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('{locale?}/contact', function () {
    return view('contact');
})->name('contact');

Route::get('{locale?}/emploie', function () {
    return view('contact');
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

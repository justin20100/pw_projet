<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegistrationController;
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
// home
Route::get('/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return view('index');
});

// global pages
Route::get('/{locale}/section', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return view('section');
});
Route::get('/{locale}/section/valeurs', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return view('section.valeurs');
});
Route::get('/{locale}/section/enseignants', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return view('section.enseignants');
});
Route::get('/{locale}/section/alumnis', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return view('section.alumnis');
});
Route::get('/{locale}/section/projets', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return view('section.projets');
});
Route::get('/{locale}/emploie', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return view('emploie');
});
Route::get('/{locale}/news', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return view('news');
});
Route::get('/{locale}/forum', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return view('forum');
});
Route::get('/{locale}/contact', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return view('contact');
});


// login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

// logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');

// Register
Route::get('/register', [RegistrationController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegistrationController::class, 'store'])->middleware('guest');

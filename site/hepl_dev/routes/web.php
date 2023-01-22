<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;


// Home

Route::get('{locale?}/', [HomepageController::class, 'index'])->name('index');

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
Route::post('{locale?}/login', [AuthenticatedSessionController::class, 'store']);
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

// Section sub pages
Route::get('{locale?}/section/alumnis', function () {
    return view('section.alumnis');
})->name('section.alumnis');

Route::get('{locale?}/section/enseignants', function () {
    return view('section.enseignants');
})->name('section.enseignants');

Route::get('{locale?}/section/singleenseignant', function () {
    return view('section.singleenseignant');
})->name('section.singleenseignant');

Route::get('{locale?}/section/projets', [ProjectController::class, 'index'])->name('index')->name('section.projets');

Route::get('{locale?}/section/valeurs', function () {
    return view('section.valeurs');
})->name('section.valeurs');


require __DIR__.'/auth.php';

/* ----- languages ----- */
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

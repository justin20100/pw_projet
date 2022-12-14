<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;


// Home
Route::get('{locale?}/', function ()
{
    $projects =  Project::join('users', 'projects.user_id', '=', 'users.id')
        ->with
        ->join('project_tag','project_tag.project_id','=','projects.id')
        ->join('tags', 'project_tag.tag_id', '=', 'tags.id')
        ->inRandomOrder()
        ->limit(5)
        ->get();
    dd($projects);
    return view('index', compact('projects'));
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

Route::get('{locale?}/section/projets', function () {
    return view('section.projets');
})->name('section.projets');

Route::get('{locale?}/section/valeurs', function () {
    return view('section.valeurs');
})->name('section.valeurs');


require __DIR__.'/auth.php';

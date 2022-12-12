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

Route::get('/', function () {return view('index');});

Route::get('/section', function () {return view('section');});

Route::get('/section/valeurs', function () {return view('section.valeurs');});

Route::get('/section/enseignants', function () {return view('section.enseignants');});

Route::get('/section/alumnis', function () {return view('section.alumnis');});

Route::get('/section/projets', function () {return view('section.projets');});

Route::get('/emploie', function () {return view('emploie');});

Route::get('/news', function () {return view('news');});

Route::get('/forum', function () {return view('forum');});

Route::get('/contact', function () {return view('contact');});

// Auth
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');

// Register
Route::get('/register',[RegistrationController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register',[RegistrationController::class,'store'])->middleware('guest');

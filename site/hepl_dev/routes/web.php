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

Route::get('/', function () {
    return view('index');
});

Route::get('/section', function () {
    return view('section');
});

Route::get('/section/valeurs', function () {
    return view('section.valeurs');
});

Route::get('/section/enseignants', function () {
    return view('section.enseignants');
});

Route::get('/section/alumnis', function () {
    return view('section.alumnis');
});

Route::get('/section/projets', function () {
    return view('section.projets');
});

Route::get('/emploie', function () {
    return view('emploie');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

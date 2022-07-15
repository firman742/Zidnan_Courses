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
    return view('frontend.home');
})->name('home');

Route::get('/home', function () {
    return view('frontend.home');
})->name('home');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/profile', function () {
    return view('frontend.profile');
})->name('profile');
Route::get('/courses', function () {
    return view('frontend.courses');
})->name('courses');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

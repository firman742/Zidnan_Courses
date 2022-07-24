<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/home', function () {
//     return view('frontend.home',[
//         'course' => App\Models\Course::all()
//     ]);
// })->name('home');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/profile', function () {
    return view('frontend.profile');
})->name('profile');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{course:slug}', [CourseController::class, 'show']);


// Dashboard
Route::get('/dashboard', function ($slug) {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

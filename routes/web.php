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
    return view('main');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/courses', function () {
    return view('courses');
})->name('courses');
Route::get('/course1', function () {
    return view('courses1');
})->name('courses1');
Route::get('/course2', function () {
    return view('courses2');
})->name('courses2');
Route::get('/course3', function () {
    return view('courses3');
})->name('courses3');
Route::get('/course4', function () {
    return view('courses4');
})->name('courses4');
Route::get('/course5', function () {
    return view('courses5');
})->name('courses5');
Route::get('/course6', function () {
    return view('courses6');
})->name('courses6');
Route::get('/course7', function () {
    return view('courses7');
})->name('courses7');
Route::get('/course8', function () {
    return view('courses8');
})->name('courses8');
Route::get('/flora', function () {
    return view('flora');
})->name('flora');
Route::get('/eric', function () {
    return view('eric');
})->name('eric');

Route::get('/caleb', function () {
    return view('caleb');
})->name('caleb');
// Route::get('', function () {
//     return view('main');
// })->name('main');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


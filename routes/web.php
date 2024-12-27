<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home1', function () {
    return view('home1');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/log_in', function () {
    return view('log_in');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/crud', function () {
    return view('crud');
});
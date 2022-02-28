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
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog-grids', function () {
    return view('blog-grids');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});



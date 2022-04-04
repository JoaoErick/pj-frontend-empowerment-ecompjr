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

/* Route::get('/', function () {
    return view('welcome');
})->name('welcome'); */

/* --------------------------------- */

/* Route::get('/', function () {
    return view('blog-no-template/welcome');
})->name('welcome');

Route::get('/more-info', function () {
    return view('blog-no-template/more-info');
})->name('more-info');

Route::get('/about', function () {
    return view('blog-no-template/about');
})->name('about');

Route::get('/contact', function () {
    return view('blog-no-template/contact');
})->name('contact'); */

/* --------------------------------- */

Route::get('/', function () {
    return view('blog/welcome');
})->name('welcome');

Route::get('/more-info', function () {
    return view('blog/more-info');
})->name('more-info');

Route::get('/about', function () {
    return view('blog/about');
})->name('about');

Route::get('/contact', function () {
    return view('blog/contact');
})->name('contact');

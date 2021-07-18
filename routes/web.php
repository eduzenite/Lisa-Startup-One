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
    return view('institutional.welcome');
})->name('welcome');

Route::get('about-us', function () {
    return view('institutional.about-us');
})->name('about-us');

Route::get('how-it-works', function () {
    return view('institutional.how-it-works');
})->name('how-it-works');

Route::get('contact', function () {
    return view('institutional.contact');
})->name('contact');

require __DIR__.'/auth.php';

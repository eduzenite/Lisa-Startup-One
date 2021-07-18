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

//Institutional
Route::get('/', function () {return view('institutional.welcome');})->name('welcome');
Route::get('about-us', function () {return view('institutional.about-us');})->name('about-us');
Route::get('how-it-works', function () {return view('institutional.how-it-works');})->name('how-it-works');
Route::get('why-use', function () {return view('institutional.why-use');})->name('why-use');
Route::get('services', function () {return view('institutional.services');})->name('services');
Route::get('contact', function () {return view('institutional.contact');})->name('contact');

//Client
Route::get('dashboard', function () {return view('client.dashboard');})->middleware(['auth'])->name('client.dashboard');
Route::get('profile', function () {return view('client.profile');})->middleware(['auth'])->name('client.profile');
Route::get('accounts ', function () {return view('client.accounts ');})->middleware(['auth'])->name('client.accounts ');
Route::get('team', function () {return view('client.team');})->middleware(['auth'])->name('client.team');
Route::get('consultations', function () {return view('client.consultations');})->middleware(['auth'])->name('client.consultations');
Route::get('configurations', function () {return view('client.configurations');})->middleware(['auth'])->name('client.configurations');

//Administrator
Route::group([
    "prefix" => "admin"
], function () {
    Route::get('dashboard', function () {return view('admin.dashboard');})->middleware(['auth'])->name('admin.dashboard');
    Route::get('clients', function () {return view('admin.clients');})->middleware(['auth'])->name('admin.clients');
    Route::get('profile', function () {return view('admin.profile');})->middleware(['auth'])->name('admin.profile');
    Route::get('accounts', function () {return view('admin.accounts');})->middleware(['auth'])->name('admin.accounts');
    Route::get('team', function () {return view('admin.team');})->middleware(['auth'])->name('admin.team');
    Route::get('consultations', function () {return view('admin.consultations');})->middleware(['auth'])->name('admin.consultations');
    Route::get('configurations', function () {return view('admin.configurations');})->middleware(['auth'])->name('admin.configurations');
    Route::get('psychologists', function () {return view('admin.psychologists');})->middleware(['auth'])->name('admin.psychologists');
    Route::get('financial', function () {return view('admin.financial');})->middleware(['auth'])->name('admin.financial');
});


require __DIR__.'/auth.php';

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
    return view('home');
})->name('home');

Route::get('/header', function () {
    return view('header');
})->name('header');

Route::get('/hero', function () {
    return view('hero');
})->name('hero');

Route::get('/footer', function () {
    return view('footer');
})->name('footer');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/regis', function () {
    return view('regis');
})->name('regis');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


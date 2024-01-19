<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('halaman', 'layouts.template');
Route::resource('pegawai', '\App\Http\Controllers\UserController');
Route::resource('outlet', '\App\Http\Controllers\OutletController');

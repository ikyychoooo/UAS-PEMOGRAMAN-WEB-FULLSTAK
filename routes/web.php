<?php

use App\Http\Controllers\Auth\AdminAuth;
use App\Http\Controllers\Admin\Admin;
use App\Http\Controllers\Auth\Signup;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    // Menampilkan halaman login
    Route::get('/login', [AdminAuth::class, 'showLoginForm'])->name('admin.login');

    // Memproses form login
    Route::post('/login', [AdminAuth::class, 'login'])->name('admin.login.submit');

    // dashboard
    Route::get('/dashboard',[Admin::class, 'index'])->name('index');


});

Route::get('/', function () {
    return view('landing-page.index');
})->name('landing-page');

route::get('/signup', function () {
    return view('auth.signup');
})->name('signup-page');

Route::post('create-user', [Signup::class, 'createUser'])->name('create-user');

route::get('/login', function () {
    return view('auth.login');
})->name('login-page');

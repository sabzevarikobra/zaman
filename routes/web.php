<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Mews\Captcha\Captcha;

Route::get('/', [LandingController::class, 'index'])->name('landing');


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// کپچا برای صفحه ورود  و ثبت نام
Route::get('captcha/{config?}', function($config = 'default') {
    return captcha($config);
});

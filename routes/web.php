<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// Route::get('/register', [RegisterController::class, 'register'])->name('register');
// Route::post('actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/user/profile', function () {
    return view('user.profile');
});
Route::get('/user/order', function () {
    return view('user.order');
});
Route::get('/user/makeorder', function () {
    return view('user.makeorder');
});
Route::get('/user/history', function () {
    return view('user.history');
});
Route::get('/admin/dashboard', function () {
    return view('admin.overview');
});
Route::get('/admin/user', function () {
    return view('admin.manage_user');
});
Route::get('/admin/order', function () {
    return view('admin.manage_order');
});

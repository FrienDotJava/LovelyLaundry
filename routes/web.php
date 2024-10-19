<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
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

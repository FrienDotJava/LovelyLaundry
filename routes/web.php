<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;

Route::aliasMiddleware('admin', AdminMiddleware::class);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/user/profile', function () {
    return view('user.profile');
});
// Route::get('/user/order', function () {
//     return view('user.order');
// })->name('order')->middleware('auth');
Route::get('/user/makeorder', function () {
    return view('user.makeorder');
});
Route::get('/user/history', function () {
    return view('user.history');
});
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('overview')->middleware(['auth', 'admin']);
// Route::get('/admin/user', function () {
//     return view('admin.manage_user');
// })->middleware(['auth', 'admin']);

Route::get('/admin/user', [UserController::class, 'index'])->name('manageuser')->middleware(['admin']);
Route::delete('/admin/user/delete/{id}', [UserController::class, 'destroy'])->name('deleteuser')->middleware([ 'admin']);
Route::post('/admin/user', [UserController::class, 'update'])->name('updateuser')->middleware(['admin']);
Route::get('/admin/user/search', [UserController::class, 'search'])->name('searchuser')->middleware(['admin']);
Route::put('/admin/user/{id}/update', [UserController::class, 'update'])->name('updateuser')->middleware(['admin']);
Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('edituser')->middleware(['admin']);


// Route::get('/admin/order', function () {
//     return view('admin.manage_order');
// })->middleware(['auth', 'admin']);
Route::get('/admin/order', [OrderController::class, 'index'])->name('manageorder')->middleware(['admin']);
Route::delete('/admin/order/{id}', [OrderController::class, 'destroy'])->name('deleteorder')->middleware([ 'admin']);
Route::get('/admin/order/search', [OrderController::class, 'search'])->name('searchorder')->middleware(['admin']);

Route::resource('/order', OrderController::class)->middleware('auth');

Route::post('actiondeliver/{id}', [OrderController::class, 'handleDeliver'])->name('handleDeliver')->middleware('auth');
Route::get('history', [OrderController::class, 'showHistory'])->name('history')->middleware('auth');
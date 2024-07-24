<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', [LoginController::class, 'index'])->name('login');
Route::post('/Login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/Register', [RegisterController::class, 'index']);
Route::post('/Register', [RegisterController::class, 'store']);

Route::middleware(['auth', 'checkusertype:merchant'])->group(function () {
    Route::get('/merchant/dashboard', [dashboardController::class, 'merchantIndex'])->middleware('auth');
});

Route::middleware(['auth', 'checkusertype:customer'])->group(function () {
    Route::get('/customer/dashboard', [dashboardController::class, 'customerIndex'])->middleware('auth');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
});

Route::resource('menu', MenuController::class)->middleware('auth');

Route::get('/customer/cp', [CustomerController::class, 'cp'])->name('customer.cp')->middleware('auth');

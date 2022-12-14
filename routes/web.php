<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::middleware(['guest'])->group(function(){
    // Route Untuk Login User
    Route::get('/', [LoginController::class, 'login']);
    Route::post('/login', [LoginController::class, 'aksi_login'])->name('login');

    // Route Untuk Register User
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'aksi_register']);
});

Route::middleware(['auth'])->group(function(){
    // Route Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route Untuk Logout User
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
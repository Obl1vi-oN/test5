<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', [RegisterController::class, 'showRegisterForm']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/message', [MessageController::class, 'store'])->middleware('auth');
Route::get('/', [MessageController::class, 'index'])->name('message')->middleware('auth');

Route::get('/admin', [AdminController::class, 'showAdminPage'])->middleware('auth')->middleware('admin');
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth')->middleware('admin');

Route::get('/adminMessage', [AdminController::class, 'showMessage'])->middleware('auth')->middleware('admin');

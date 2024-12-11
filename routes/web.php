<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Halaman awal (Login page)
Route::get('/', function () {
    return view('loginpage'); // Halaman login utama
})->name('loginpage');

// Rute untuk pengguna
Route::get('/user/dashboard', [DashboardController::class, 'userDashboard'])
    ->middleware('auth') // Pastikan pengguna sudah login
    ->name('user.dashboard');

// Rute untuk admin login
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');

// Menambahkan middleware 'admin' untuk akses ke dashboard admin
Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});
// Tambahkan rute lain jika diperlukan
require __DIR__ . '/auth.php';
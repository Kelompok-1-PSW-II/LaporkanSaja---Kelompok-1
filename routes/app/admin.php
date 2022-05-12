<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\MoreController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\DashboardController;

Route::group(['domain' => ''], function () {
    Route::get('admin/auth', [AuthController::class, 'index'])->name('auth.login');
    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::prefix('auth')->name('auth.')->group(function () {
            Route::post('login', [AuthController::class, 'do_login'])->name('login');
        });
        Route::middleware(['admin'])->group(function () {
            Route::redirect('/', 'dashboard', 301);
            Route::get('dashboard/excel', [DashboardController::class, 'excel'])->name('dashboard.excel');
            Route::resource('dashboard', DashboardController::class);
            Route::get('logout', [AuthController::class, 'do_logout'])->name('auth.logout');
        });
    });
});

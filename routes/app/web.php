<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\LaporController;
use App\Http\Controllers\Web\PengumumanController;
use App\Http\Controllers\Web\GrafikController;
use App\Http\Controllers\Web\LaporkanController;
use App\Http\Controllers\Web\TemukanController;
use App\Http\Controllers\Web\DashboardController;

Route::group(['domain' => ''], function () {
    Route::get('auth', [AuthController::class, 'index'])->name('auth.index');
    Route::get('auth/register', [AuthController::class, 'register'])->name('auth.register');
    Route::prefix('')->name('web.')->group(function () {
        Route::prefix('auth')->name('auth.')->group(function () {
            Route::post('login', [AuthController::class, 'do_login'])->name('login');
            Route::post('register', [AuthController::class, 'do_register'])->name('register');
        });
        Route::middleware(['auth:web'])->group(function () {
            Route::redirect('/', 'dashboard', 301);
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('logout', [AuthController::class, 'do_logout'])->name('auth.logout');
            Route::get('hilang', [LaporkanController::class, 'hilang'])->name('hilang');
            Route::get('temuan', [LaporkanController::class, 'temuan'])->name('temuan');
            Route::get('pengumuman', [PengumumanController::class, 'pengumuman'])->name('pengumuman');
            Route::resource('lapor', LaporController::class);
            Route::get('grafik', [GrafikController::class, 'grafik'])->name('grafik');
            Route::get('temukan', [TemukanController::class, 'temukan'])->name('temukan');
        });
    });
});

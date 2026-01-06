<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\Landing\WisataController;
use App\Http\Controllers\Landing\BerandaController;

Route::get('/', [LandingController::class, 'index'])->name('landing.beranda');
Route::get('/program', [LandingController::class, 'program'])->name('landing.program');
Route::get('/program/{slug}', [LandingController::class, 'programDetail'])->name('landing.program-detail');
Route::get('/wisata', [LandingController::class, 'wisata'])->name('landing.wisata');
Route::get('/dukungan-kerjasama', [LandingController::class, 'dukunganKerjasama'])->name('landing.dukungan-kerjasama');
Route::get('/proposal', [LandingController::class, 'proposal'])->name('landing.proposal');
Route::get('/kontak', [LandingController::class, 'kontak'])->name('landing.kontak');


Route::get('auth/login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::post('auth/login', [AuthController::class, 'login'])->name('login');
Route::get('auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/site-setting', [SiteSettingController::class, 'index'])->name('site_setting.index');
    Route::put('/site-setting/{id}', [SiteSettingController::class, 'update'])->name('site_setting.update');

    Route::get('/program/{id}', [ProgramController::class, 'show'])->name('program.show');
    Route::put('/program/{id}', [ProgramController::class, 'update'])->name('program.update');
});

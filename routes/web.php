<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\BerandaController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

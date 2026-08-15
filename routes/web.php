<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtomotifController;

Route::get('/', [OtomotifController::class, 'home'])
    ->name('home');

Route::get('/kalkulator-cc', [OtomotifController::class, 'cc'])
    ->name('cc');

Route::get('/kalkulator-bore-up', [OtomotifController::class, 'boreup'])
    ->name('boreup');

Route::get('/kalkulator-kompresi', [OtomotifController::class, 'kompresi'])
    ->name('kompresi');

Route::get('/ukuran-ban', [OtomotifController::class, 'ban'])
    ->name('ban');

Route::get('/database-motor', [OtomotifController::class, 'motor'])
    ->name('motor');

Route::get('/tentang', [OtomotifController::class, 'tentang'])
    ->name('tentang');
<?php

use App\Http\Controllers\Admin\DataLaporanPplController;
use App\Http\Controllers\Admin\ManajemenDataPplController;
use Illuminate\Support\Facades\Route;


Route::get('/manajemen', [ManajemenDataPplController::class, 'index']);
Route::get('/data', [DataLaporanPplController::class, 'index']);

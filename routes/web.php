<?php

use App\Http\Controllers\OfficePortalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OfficePortalController::class, 'dashboard'])->name('dashboard');
Route::get('/siswa', [OfficePortalController::class, 'students'])->name('students.index');
Route::get('/persuratan', [OfficePortalController::class, 'letters'])->name('letters.index');
Route::get('/arsip', [OfficePortalController::class, 'archives'])->name('archives.index');

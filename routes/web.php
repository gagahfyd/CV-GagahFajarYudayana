<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

Route::get('/', [CvController::class, 'show'])->name('cv.show');

Route::get('/cv', [CvController::class, 'show'])->name('cv.show');

<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserProgressController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';

Route::get('/', [IndexController::class, 'index'])->name('index');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserProfileController::class, 'index'])->name('user_profile');
    Route::get('/progress', [UserProgressController::class, 'index'])->name('progress');
});


Route::fallback(function () {
    return view('pages.404');
});





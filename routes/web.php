<?php

use App\Http\Controllers\YulindaController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/yulinda', [YulindaController::class, 'index'])->name('yulinda');

require __DIR__.'/settings.php';

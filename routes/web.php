<?php

use App\Models\Bussine;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BussineController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

Route::resource('settings', BussineController::class);

//Route::get('setting', [BussineController::class, 'create'])->name('bussine.create');
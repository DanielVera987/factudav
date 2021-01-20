<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BussineController;

Route::get('/', function () { return redirect()->route('login'); });

Auth::routes();
Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
Route::resource('settings', BussineController::class);

Route::get('/municipalities/{id}', [DashboardController::class, 'getMunicipalities'])
  ->where(['id' => '[0-9]+']);
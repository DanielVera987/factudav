<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BussineController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () { return redirect()->route('login'); });

Auth::routes();
Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

Route::resource('settings', BussineController::class);
Route::resource('customers', CustomerController::class);

Route::get('/municipalities/{id}', [DashboardController::class, 'getMunicipalities'])
  ->where(['id' => '[0-9]+']);
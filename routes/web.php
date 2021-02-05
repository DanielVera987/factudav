<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BussineController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;

Route::get('/', function () { return redirect()->route('login'); });

Auth::routes();
Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
Route::resource('/settings', BussineController::class);
Route::resource('/customers', CustomerController::class);
Route::resource('/products', ProductController::class);


// Route for Ajax
Route::get('/municipalities/{id}', [DashboardController::class, 'getMunicipalities'])
  ->where(['id' => '[0-9]+']);
Route::get('/tax/{id}', [DashboardController::class, 'deleteTax'])
  ->where(['id' => '[0-9]+']);
Route::get('/currency/{id}', [DashboardController::class, 'deleteCurrency'])
  ->where(['id' => '[0-9]+']);
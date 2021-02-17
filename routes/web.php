<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BussineController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;

Route::get('/', function () { return redirect()->route('login'); });

Auth::routes();
Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
Route::resource('/settings', BussineController::class);
Route::resource('/customers', CustomerController::class);
Route::resource('/products', ProductController::class);
Route::resource('/invoices', InvoiceController::class);


// Route for Ajax
Route::get('/municipalities/{id}', [DashboardController::class, 'getMunicipalities'])
  ->where(['id' => '[0-9]+']);
Route::get('/tax/{id}', [DashboardController::class, 'deleteTax'])
  ->where(['id' => '[0-9]+']);
Route::get('/currency/{id}', [DashboardController::class, 'deleteCurrency'])
  ->where(['id' => '[0-9]+']);
Route::get('/searchUnit', [SearchController::class, 'searchUnits']);
Route::get('/searchCustomers', [SearchController::class, 'searchCustomers']);
Route::get('/searchProduServ', [SearchController::class, 'searchProduServ']);
Route::get('/searchProducts', [SearchController::class, 'searchProducts']);
Route::get('/json/convertHtml', [SearchController::class, 'convertDetailHtml']);
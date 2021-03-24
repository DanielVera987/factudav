<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BussineController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ComplementPayController;

Route::get('/', function () { return redirect()->route('login'); });

/**
 * The registration url is deactivated so that only one user can access the system
 */
Auth::routes(['register' => false, 'reset' => false]);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
Route::resource('/settings', BussineController::class);
Route::resource('/customers', CustomerController::class);
Route::resource('/products', ProductController::class);
Route::resource('/invoices', InvoiceController::class);
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}/update', [UserController::class, 'update'])->name('user.update');
Route::get('/invoices/create/{id}/complement', [ComplementPayController::class, 'createComplement'])
  ->where(['id' => '[0-9]+'])
  ->name('invoices.create.complement');
Route::post('/invoices/store/{id}/complement', [ComplementPayController::class, 'storeComplement'])
  ->where(['id' => '[0-9]+'])
  ->name('invoices.store.complement');

// Email
Route::get('/invoices/email/{id}/create', [InvoiceController::class, 'createEmail'])->name('invoices.createEmail');
Route::post('/invoices/{id}/sendinvoice', [InvoiceController::class, 'sendMail'])->name('invoices.sendEmail');

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

//Download Files
Route::get('/invoices/pdf/{id}', [InvoiceController::class, 'downloadPDF'])
  ->where(['id' => '[0-9]+'])->name('invoices.downloadPDF');

//Cancel Invoice
Route::get('/invoices/{id}/{action}', [InvoiceController::class, 'cancel'])
  ->where(['id' => '[0-9]+'])->name('invoices.cancel');

Route::get('/uploads/xml/{file}', [InvoiceController::class, 'downloadXML'])
  ->where(['file' => '(.*?)\.(xml)$'])->name('uploads.xml');
Route::get('/customer/export/cvs', [CustomerController::class, 'exportCVS']);
Route::get('/product/export/cvs', [ProductController::class, 'exportCVS']);

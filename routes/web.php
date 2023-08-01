<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmailCampaignsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// customer routes
Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer-create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer-store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer-edit/{customer}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer-update/{customer}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customer-destroy/{customer}', [CustomerController::class, 'destroy'])->name('customer.destroy');


// email campaign routes
Route::get('/email-campaign' , [EmailCampaignsController::class, 'index'])->name('email.campaign');
Route::post('/customer-email-campaign' , [EmailCampaignsController::class, 'campaign'])->name('customer.email.campaign');
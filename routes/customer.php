<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::resource('pelanggan', CustomerController::class);
Route::get('/admin/pelanggan', [CustomerController::class, 'adminIndex'])
    ->name('admin.customers');
?>

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

Route::get('/admin/supplier', [SupplierController::class, 'adminIndex'])
    ->name('admin.suppliers');
    
Route::resource('supplier', SupplierController::class);

?>

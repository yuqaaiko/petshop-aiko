<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/admin/produk', [ProductController::class, 'adminIndex'])
    ->name('admin.products');

Route::resource('produk', ProductController::class);
?>

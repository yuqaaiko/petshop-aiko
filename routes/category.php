<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/admin/kategori', [CategoryController::class, 'adminIndex'])
    ->name('admin.categories');

Route::resource('kategori', CategoryController::class);
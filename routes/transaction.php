<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::resource('transaksi', TransactionController::class);

Route::post('/transaction/{id}/approve', [TransactionController::class, 'approve'])
    ->name('transaksi.approve');

Route::post('/transaction/{id}/reject', [TransactionController::class, 'reject'])
    ->name('transaksi.reject');

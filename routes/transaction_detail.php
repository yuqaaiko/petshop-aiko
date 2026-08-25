<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::resource('transaksi', TransactionController::class);
?>

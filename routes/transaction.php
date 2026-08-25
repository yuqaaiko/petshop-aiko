<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionDetailController;

Route::resource('detail-transaksi', TransactionDetailController::class);
?>

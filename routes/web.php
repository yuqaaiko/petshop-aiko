<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/category.php';
require __DIR__.'/customer.php';
require __DIR__.'/product.php';
require __DIR__.'/supplier.php';
require __DIR__.'/transaction.php';
require __DIR__.'/transaction_detail.php';

Route::get('/', function () {
    return view('welcome');
});
?>

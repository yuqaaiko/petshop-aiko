<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/category.php';
require __DIR__.'/customer.php';
require __DIR__.'/product.php';
require __DIR__.'/supplier.php';
require __DIR__.'/transaction.php';
require __DIR__.'/transaction_detail.php';

Route::get('/', function () {
    return view('customer.dashboard');
});

Route::get('/tentang-kami', function () {
    return view('customer.about');
})->name('about');

Route::get('/admin', function () {
    return view('admin.access');
})->name('admin.access');

Route::post('/admin/check', function () {
    if (request('password') === 'punyaiko') {
        return view('admin.dashboard');
    }

    return back()->with('error', 'Password Admin salah.');
})->name('admin.check');
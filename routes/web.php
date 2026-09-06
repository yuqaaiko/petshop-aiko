<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

require __DIR__.'/category.php';
require __DIR__.'/customer.php';
require __DIR__.'/product.php';
require __DIR__.'/supplier.php';
require __DIR__.'/transaction.php';
require __DIR__.'/transaction_detail.php';

Route::get('/keranjang', [CartController::class, 'index'])
    ->name('cart.index');

Route::post('/keranjang/tambah/{id}', [CartController::class, 'add'])
    ->name('cart.add');

Route::post('/keranjang/update/{id}', [CartController::class, 'update'])
    ->name('cart.update');

Route::delete('/keranjang/hapus/{id}', [CartController::class, 'remove'])
    ->name('cart.remove');

Route::post('/cart/{id}/increase', [CartController::class, 'increase'])
    ->name('cart.increase');

Route::post('/cart/{id}/decrease', [CartController::class, 'decrease'])
    ->name('cart.decrease');

Route::get('/', function () {
    return view('customer.dashboard');
});

Route::get('/tentang-kami', function () {
    return view('customer.about');
})->name('about');

Route::get('/admin', function () {
    return view('admin.access');
})->name('admin.access');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::post('/admin/check', function () {
    if (request('password') === 'punyaiko') {
        return redirect()->route('admin.dashboard');
    }

    return back()->with('error', 'Password Admin salah.');
})->name('admin.check');

Route::get('/checkout', [CartController::class, 'checkout'])
    ->name('checkout.index');

Route::post('/checkout', [CartController::class, 'processCheckout'])
    ->name('checkout.process');

Route::get('/pesanan/{id}', [CartController::class, 'detail'])
    ->name('customer.detail');

Route::get('/riwayat-pesanan', function () {
    return view('customer.history-search');
})->name('customer.history.search');

Route::get('/riwayat-pesanan/cari', [CartController::class, 'history'])
    ->name('customer.history');

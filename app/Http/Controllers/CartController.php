<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('customer.cart', compact('cart'));
    }

    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            $cart[$id]['jumlah']++;

        } else {

            $cart[$id] = [
                'id_produk' => $product->id_produk,
                'nama_produk' => $product->nama_produk,
                'harga' => $product->harga,
                'jumlah' => 1,
            ];

        }

        session()->put('cart', $cart);

        return redirect()
            ->back()
            ->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            $cart[$id]['jumlah'] = $request->jumlah;

        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            unset($cart[$id]);

        }

        session()->put('cart', $cart);

        return redirect()
            ->route('cart.index')
            ->with('success', 'Produk berhasil dihapus dari keranjang.');
    }

    public function increase($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            $cart[$id]['jumlah']++;

        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function decrease($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            if ($cart[$id]['jumlah'] > 1) {

                $cart[$id]['jumlah']--;

            } else {

                unset($cart[$id]);

            }

        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }
public function checkout()
{
    $cart = session()->get('cart', []);

    return view('customer.checkout', compact('cart'));
}
public function processCheckout(Request $request)
{
    $request->validate([
        'nama_pelanggan' => 'required',
        'alamat' => 'required',
        'nomor_telepon' => 'required',
        'metode_pembayaran' => 'required',
    ]);

    $cart = session()->get('cart', []);

    if (empty($cart)) {
        return redirect()
            ->route('cart.index')
            ->with('error', 'Keranjang masih kosong.');
    }

    // Simpan data pelanggan
    $customer = Customer::create([
        'nama' => $request->nama_pelanggan,
        'alamat' => $request->alamat,
        'telepon' => $request->nomor_telepon,
    ]);

    // Hitung total transaksi
    $total = 0;

    foreach ($cart as $item) {
        $total += $item['harga'] * $item['jumlah'];
    }

    // Simpan transaksi
    $transaction = Transaction::create([
        'id_pelanggan' => $customer->id_pelanggan,
        'tanggal' => now()->toDateString(),
        'total' => $total,
    ]);

    // Simpan detail transaksi
    foreach ($cart as $item) {
        TransactionDetail::create([
            'id_transaksi' => $transaction->id_transaksi,
            'id_produk' => $item['id_produk'],
            'qty' => $item['jumlah'],
            'subtotal' => $item['harga'] * $item['jumlah'],
        ]);
    }

    // Kosongkan keranjang
    session()->forget('cart');

    return redirect()
        ->route('cart.index')
        ->with('success', 'Pesanan berhasil dibuat dan tersimpan.');
}
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [
                'id_produk' => $product->id_produk,
                'nama_produk' => $product->nama_produk,
                'harga' => $product->harga,
                'quantity' => 1,
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

            $cart[$id]['quantity'] = $request->quantity;

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
}
<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function index()
    {
        $transactionDetails = TransactionDetail::all();

        return view('transaction_detail.index', compact('transactionDetails'));
    }

    public function create()
    {
        return view('transaction_detail.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_transaksi' => 'required|exists:transactions,id',
            'id_produk' => 'required|exists:products,id',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric',
            'subtotal' => 'required|numeric',
        ]);

        TransactionDetail::create([
            'id_transaksi' => $request->id_transaksi,
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'subtotal' => $request->subtotal,
        ]);

        return redirect()->route('transaction_detail.index')
            ->with('success', 'Detail transaksi berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $transactionDetail = TransactionDetail::findOrFail($id);

        return view('transaction_detail.show', compact('transactionDetail'));
    }

    public function edit(string $id)
    {
        $transactionDetail = TransactionDetail::findOrFail($id);

        return view('transaction_detail.edit', compact('transactionDetail'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_transaksi' => 'required|exists:transactions,id',
            'id_produk' => 'required|exists:products,id',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric',
            'subtotal' => 'required|numeric',
        ]);

        $transactionDetail = TransactionDetail::findOrFail($id);

        $transactionDetail->update([
            'id_transaksi' => $request->id_transaksi,
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'subtotal' => $request->subtotal,
        ]);

        return redirect()->route('transaction_detail.index')
            ->with('success', 'Detail transaksi berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $transactionDetail = TransactionDetail::findOrFail($id);

        $transactionDetail->delete();

        return redirect()->route('transaction_detail.index')
            ->with('success', 'Detail transaksi berhasil dihapus.');
    }
}

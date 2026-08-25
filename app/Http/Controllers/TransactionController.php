<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return view('transaction.index', compact('transactions'));
    }

    public function create()
    {
        return view('transaction.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:customers,id',
            'tanggal_transaksi' => 'required|date',
            'total_harga' => 'required|numeric',
        ]);

        Transaction::create([
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'total_harga' => $request->total_harga,
        ]);

        return redirect()->route('transaction.index')
            ->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $transaction = Transaction::findOrFail($id);

        return view('transaction.show', compact('transaction'));
    }

    public function edit(string $id)
    {
        $transaction = Transaction::findOrFail($id);

        return view('transaction.edit', compact('transaction'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:customers,id',
            'tanggal_transaksi' => 'required|date',
            'total_harga' => 'required|numeric',
        ]);

        $transaction = Transaction::findOrFail($id);

        $transaction->update([
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'total_harga' => $request->total_harga,
        ]);

        return redirect()->route('transaction.index')
            ->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->delete();

        return redirect()->route('transaction.index')
            ->with('success', 'Transaksi berhasil dihapus.');
    }
}

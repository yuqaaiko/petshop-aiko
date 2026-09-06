<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
public function index()
{
    $transactions = Transaction::all();

    return view('admin.transactions', compact('transactions'));
}

    public function create()
    {
        return view('transaction.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:pelanggan,id_pelanggan',
            'tanggal' => 'required|date',
            'total' => 'required|numeric',
        ]);

        Transaction::create([
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal' => $request->tanggal,
            'total' => $request->total,
            'status' => 'Menunggu Persetujuan',
        ]);

        return redirect()
            ->route('transaction.index')
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
            'id_pelanggan' => 'required|exists:pelanggan,id_pelanggan',
            'tanggal' => 'required|date',
            'total' => 'required|numeric',
        ]);

        $transaction = Transaction::findOrFail($id);

        $transaction->update([
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal' => $request->tanggal,
            'total' => $request->total,
        ]);

        return redirect()
            ->route('transaction.index')
            ->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->delete();

        return redirect()
            ->route('transaction.index')
            ->with('success', 'Transaksi berhasil dihapus.');
    }

    // Admin menyetujui transaksi
public function approve(string $id)
{
    $transaction = Transaction::findOrFail($id);

    $transaction->update([
        'status' => 'Disetujui',
    ]);

    return redirect()
        ->route('transaksi.index')
        ->with('success', 'Transaksi berhasil disetujui.');
}

    // Admin menolak transaksi
public function reject(string $id)
{
    $transaction = Transaction::findOrFail($id);

    $transaction->update([
        'status' => 'Ditolak',
    ]);

    return redirect()
        ->route('transaksi.index')
        ->with('success', 'Transaksi berhasil ditolak.');
}
}

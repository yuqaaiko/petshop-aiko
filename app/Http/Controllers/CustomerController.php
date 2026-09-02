<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function adminIndex()
{
    $customers = Customer::all();

    return view('admin.customers', compact('customers'));
}

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string|max:20',
        ]);

        Customer::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
        ]);

        return redirect()->route('admin.customer')
            ->with('success', 'Pelanggan berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);

        return view('customer.show', compact('customer'));
    }

    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);

        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string|max:20',
        ]);

        $customer = Customer::findOrFail($id);

        $customer->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
        ]);

        return redirect()->route('admin.customer')
            ->with('success', 'Pelanggan berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return redirect()->route('admin.customer')
            ->with('success', 'Pelanggan berhasil dihapus.');
    }
}

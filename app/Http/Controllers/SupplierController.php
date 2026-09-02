<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();

        return view('admin.suppliers', compact('suppliers'));
    }
    public function adminIndex()
{
    $suppliers = Supplier::all();

    return view('admin.suppliers', compact('suppliers'));
}
    public function create()
    {
        return view('admin.supplier-create');
    }

public function store(Request $request)
{
    $request->validate([
        'nama_supplier' => 'required|string|max:255',
        'alamat' => 'required|string',
        'telepon' => 'required|string|max:20',
    ]);

    Supplier::create([
        'nama_supplier' => $request->nama_supplier,
        'alamat' => $request->alamat,
        'telepon' => $request->nomor_telepon,
    ]);

    return redirect()->route('admin.suppliers')
        ->with('success', 'Supplier berhasil ditambahkan.');
}

    public function show(string $id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('supplier.show', compact('supplier'));
    }

public function edit(string $id)
{
    $supplier = Supplier::findOrFail($id);

    return view('admin.supplier-edit', compact('supplier'));
}

public function update(Request $request, string $id)
{
    $request->validate([
        'nama_supplier' => 'required|string|max:255',
        'alamat' => 'required|string',
        'telepon' => 'required|string|max:20',
    ]);

    $supplier = Supplier::findOrFail($id);

    $supplier->update([
        'nama_supplier' => $request->nama_supplier,
        'alamat' => $request->alamat,
        'telepon' => $request->telepon,
    ]);

    return redirect()->route('admin.suppliers')
        ->with('success', 'Supplier berhasil diperbarui.');
}

public function destroy(string $id)
{
    $supplier = Supplier::findOrFail($id);

    $supplier->delete();

    return redirect()->route('admin.suppliers')
        ->with('success', 'Supplier berhasil dihapus.');

    }
}

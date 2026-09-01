<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index()
{
    $products = Product::all();

    return view('customer.products', compact('products'));
}

public function adminIndex()
{
    $products = Product::all();

    return view('admin.products', compact('products'));
}


    public function create()
{
    $categories = Category::all();
    $suppliers = Supplier::all();

    return view('admin.product-create', compact('categories', 'suppliers'));
}

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'id_kategori' => 'required|exists:categories,id',
            'id_supplier' => 'required|exists:suppliers,id',
        ]);

        Product::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'id_kategori' => $request->id_kategori,
            'id_supplier' => $request->id_supplier,
        ]);

        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('customer.product-detail', compact('product'));
    }
public function edit(string $id)
{
    $product = Product::findOrFail($id);

    $categories = Category::all();
    $suppliers = Supplier::all();

    return view(
        'admin.product-edit',
        compact('product', 'categories', 'suppliers')
    );
}
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'id_kategori' => 'required|exists:categories,id',
            'id_supplier' => 'required|exists:suppliers,id',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'id_kategori' => $request->id_kategori,
            'id_supplier' => $request->id_supplier,
        ]);

        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('produk.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
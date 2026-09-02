<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $categories = Category::all();

    return view('category.index', compact('categories'));
}

public function adminIndex()
{
    $categories = Category::all();

    return view('admin.categories', compact('categories'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        Category::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('category.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);

        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit(string $id)
{
    $category = Category::findOrFail($id);

    return view('admin.category-edit', compact('category'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $request->validate([
        'nama_kategori' => 'required|string|max:255',
    ]);

    $category = Category::findOrFail($id);

    $category->update([
        'nama_kategori' => $request->nama_kategori,
    ]);

    return redirect()->route('admin.categories')
        ->with('success', 'Kategori berhasil diperbarui.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('category.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}
